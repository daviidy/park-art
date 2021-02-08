<?php

namespace App\Http\Controllers;

use App\Http\Repositories\FreelancerRepository;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FreelanceModel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use ImageResize;
use MercurySeries\Flashy\Flashy;
use PHPUnit\TextUI\XmlConfiguration\Logging\Logging;
use File;

class FreelanceController extends Controller
{

    private $freelanceModel = null;
    private $freelancerRepository;
    /**
     * __construct
     * This constructor initialize new instance of FreelanceModel
     * for get all logic on this model
     *
     * @return void
     */
    public function __construct(FreelancerRepository $freelancerRepository)
    {
        $this->freelanceModel = new FreelanceModel;
        $this->freelancerRepository = $freelancerRepository;
    }

    /**
     * Display a listing of the freelancer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.freelancer.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        return view('users.freelancer.freelancer_profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->freelancerRepository->getUser(Auth::user()->id);
        return view('users.freelancer.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'profile_image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();
        $image = $request->file('profile_image');

        if($image){

            $ProfileImageName = time().'.'.$image->getClientOriginalExtension();
            ImageResize::make($image->path())->resize(300, 300)->save(public_path('images/' . $ProfileImageName));
            $image->move(public_path('images'), $ProfileImageName);
            $user->profile_image = $ProfileImageName;
            $user->save();

            return back()
            ->with('success','Image ajouté avec succès.')
            ->with('image',$ProfileImageName);
        }

        $user->description = $request->input('description');
        $user->save();

        return back()
                ->with('success','Image ajouté avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function allFreelancers ()
    {
        return view('users.freelancer.prestataire', ['freelancers' => $this->freelanceModel->getAllFreelancers()]);
    }

    public function freelancerInfo ($id)
    {
        return view('users.freelancer.freelancer_profile', ['user' => $this->freelanceModel->getFreelancerInfo()]);
    }

    public function saveProposal(Request $request)
    {
        $datas = $request->all();
        try {
            $response = $this->freelancerRepository->saveProposal($datas);
            
            if ($response){
                return back()->with('success', 'Votre proposition a été prise en compte');
            }
            return back()->with('error', 'Une erreur est survenue');
        }catch(\Exception $exception){
            return back()->with('error', 'Une erreur est survenue');
        }
    }

    public function addEducation(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'begin_at' => 'required',
            'end_at' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $datas = $request->all();
            $success = false;
            $education = $this->freelancerRepository->addEducation($datas);
            $medias = $datas['medias'];    
            if ($education){
                if ($medias){
                    foreach($medias as $media){
                        $freelanceMediaName = $media->getClientOriginalName();
                        $path = $this->createFolder('educations', Auth::user()->first_name.'_'.Auth::user()->last_name.'_'.Auth::user()->id.'_'. $datas['title']);
                        $media->move(public_path($path), $freelanceMediaName);
                        $datas['media'] = $freelanceMediaName;
                        $datas['educations_id'] = $education->id;
                        if(!$this->freelancerRepository->addMedia($datas)){
                            $success = false;
                            break;
                        }
                        $success = true;
                        }
                }else{
                    $success = true;
                }
            }
            if($success ){
                DB::commit();
                session(['notification_icon'=>'check_circle']);
                Flashy::success('Formation ajoutée avec succès');
                return back();
            }else{
                   DB::rollBack();
                   session(['notification_icon'=>'error']);
                   Flashy::error('Une erreur est survenue lors de l\'enregistrement');
                   return back();
                }
        } catch (\Exception $exception) {
            DB::rollBack();
            $codeDupicateValue = 23000;
            $message = '';
            if($exception->getCode() == $codeDupicateValue){
                $message = 'Vous avez déjà enregistré cette formation';
            }else{
                $message = 'Une erreur est survenue lors de l\'enregistrement';
            }
            session(['notification_icon'=>'error']);
            Flashy::error($message);
            return back();
        }
    }

    private function createFolder($name,$doc)
    {
        $path = 'images/freelancers/'.$name.'/'. $doc;
    
        /* Check if the directory already exists. */
        if(!is_dir($path)){
            /* Directory does not exist, so lets create it. */
            mkdir($path , 0755, true);
        }
 

        return $path;
    }

    public function deleteFormation($id)
    {
        $response = $this->freelancerRepository->deleteEducation($id);

        if($response){
            session(['notification_icon'=>'check_circle']);
            Flashy::success('Formation supprimée avec succès');
            return back();
        }
    }
   
}
