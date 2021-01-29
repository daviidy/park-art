<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FreelanceModel;
use Illuminate\Support\Facades\Auth;
use ImageResize;

class FreelanceController extends Controller
{

    private $freelanceModel = null;
    /**
     * __construct
     * This constructor initialize new instance of FreelanceModel
     * for get all logic on this model
     *
     * @return void
     */
    public function __construct()
    {
        $this->freelanceModel = new FreelanceModel;
    }

    /**
     * Display a listing of the freelancer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('okii');
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
        $user = Auth::user();
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
        // $freelancers = User::all()->where('role_id', 2);
        return view('users.freelancer.prestataire', ['freelancers' => $this->freelanceModel->getAllFreelancers()]);
    }

    public function freelancerInfo ($id)
    {
        return view('users.freelancer.freelancer_profile', ['user' => $this->freelanceModel->getFreelancerInfo()]);
    }
}
