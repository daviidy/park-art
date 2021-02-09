<?php

namespace App\Http\Controllers;

use App\Http\Repositories\FreelancerRepository;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FreelanceModel;
use App\Models\Media;
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
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        $user = Auth::user();
        $image = $request->file('profile_image');
        $datas = $request->all();    
        if($image){

            $ProfileImageName = time().'.'.$image->getClientOriginalExtension();
            ImageResize::make($image->path())->resize(300, 300)->save(public_path('images/' . $ProfileImageName));
            $image->move(public_path('images'), $ProfileImageName);
            $user->profile_image = $ProfileImageName;
            $user->first_name = $datas['first_name'];
            $user->last_name = $datas['last_name'];
            $user->save();

            session(['notification_icon'=>'check_circle']);
            Flashy::success('Profile modifié avec succès');
            return back();
        }

        $user->description = $request->input('description');
        $user->first_name = $datas['first_name'];
        $user->last_name = $datas['last_name'];
        $user->save();
        session(['notification_icon'=>'check_circle']);
                Flashy::success('Profile modifié avec succès');
        return back();
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
        $user = $this->freelancerRepository->getUser($id);
       //return response()->json($user);
        return view('users.freelancer.show', ['user' => $user, 'canUpdate' => false]);
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
                
            if ($education){
                if (isset($datas['medias'])){
                    $folder = 'images/freelancers/educations';
                    $success = $this->saveMedia($datas['medias'], $datas,$folder, $education->id, false);
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
        $path = $name.'/'. $doc;
    
        /* Check if the directory already exists. */
        if(!is_dir($path)){
            /* Directory does not exist, so lets create it. */
            mkdir($path , 0755, true);
        }
 

        return $path;
    }

    public function updateEducation(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'begin_at' => 'required',
            'end_at' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $datas = $request->all();
            $success = false;
            $education = $this->freelancerRepository->updateEducation($datas); 
            if ($education){
                if (isset($datas['medias'])){
                    Media::where('educations_id', $datas['education_id'])->delete();
                    $folder = 'images/freelancers/educations';
                    $success = $this->saveMedia($datas['medias'], $datas,$folder, $education->id, false);
                }else{
                    $success = true;
                }
            }
            if($success ){
                DB::commit();
                session(['notification_icon'=>'check_circle']);
                Flashy::success('La formation a été modifiée avec succès');
                return back();
            }else{
                   DB::rollBack();
                   session(['notification_icon'=>'error']);
                   Flashy::error('Une erreur est survenue lors de la modification');
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

    public function deleteFormation($formation_id)
    {
        $response = $this->freelancerRepository->deleteEducation($formation_id);

        if($response){
            session(['notification_icon'=>'check_circle']);
            Flashy::success('Formation supprimée avec succès');
            return back();
        }
    }

    public function editFormation($formation_id){
        $education = $this->freelancerRepository->getEducation($formation_id);

        return view('users.freelancer.pLoad.modal-edit-formation', compact('education'));
    }

    public function addExperience(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'begin_at' => 'required'
        ]);

        try {
            DB::beginTransaction();
            $datas = $request->all();
            $success = false;
            $experience = $this->freelancerRepository->addExperience($datas);
                
            if ($experience){
                if (isset($datas['medias'])){
                    $folder = 'images/freelancers/experiences';
                    $success = $this->saveMedia($datas['medias'], $datas,$folder, false, $experience->id);
                }else{
                    $success = true;
                }
            }
            if($success ){
                DB::commit();
                session(['notification_icon'=>'check_circle']);
                Flashy::success('Nouvelle référence ajoutée');
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
                $message = 'Vous avez déjà enregistré cette référence';
            }else{
                $message = 'Une erreur est survenue lors de l\'enregistrement';
            }
            session(['notification_icon'=>'error']);
            Flashy::error($message);
            return back();
        }
    }

    public function updateExperience(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'begin_at' => 'required'
        ]);

        try {
            DB::beginTransaction();
            $datas = $request->all();
            $success = false;
            $experience = $this->freelancerRepository->updateExperience($datas);
                
            if ($experience){
                if (isset($datas['medias'])){
                    Media::where('experience_id', $datas['experience_id'])->delete();
                    $folder = 'images/freelancers/experiences';
                    $success = $this->saveMedia($datas['medias'], $datas,$folder, false, $experience->id);
                }else{
                    $success = true;
                }
            }
            if($success ){
                DB::commit();
                session(['notification_icon'=>'check_circle']);
                Flashy::success('Référence modifiée');
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
                $message = 'Vous avez déjà enregistré cette référence';
            }else{
                $message = 'Une erreur est survenue lors de l\'enregistrement';
            }
            session(['notification_icon'=>'error']);
            Flashy::error($message);
            return back();
        }
    }

    public function saveMedia($medias, $datas,$folder, $education = null, $experience = null)
    {
        $success = false;
        foreach($medias as $media){
            $freelanceMediaName = $media->getClientOriginalName();
            $path = $this->createFolder($folder, Auth::user()->first_name.'_'.Auth::user()->last_name.'_'.Auth::user()->id.'_'. $datas['title']);
            $media->move(public_path($path), $freelanceMediaName);
            $datas['media'] = $freelanceMediaName;
            if($education) $datas['educations_id'] = $education;
            if($experience) $datas['experience_id'] = $experience;
            if(!$this->freelancerRepository->addMedia($datas)){
                $success = false;
                break;
            }
            $success = true;
            }

            return $success;
    }

    public function deleteExperience($experience_id)
    {
        $response = $this->freelancerRepository->deleteExperience($experience_id);

        if($response){
            session(['notification_icon'=>'check_circle']);
            Flashy::success('Expérience supprimée avec succès');
            return back();
        }
    }

    public function editExperience($experience_id){
        $experience = $this->freelancerRepository->getExperience($experience_id);

        return view('users.freelancer.pLoad.modal-edit-experience', compact('experience'));
    }
   
}
