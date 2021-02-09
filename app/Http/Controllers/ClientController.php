<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Project;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ImageResize;
use MercurySeries\Flashy\Flashy;

class ClientController extends Controller
{
    /**
     * Display a listing of the user project.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $projects = $user->projects;

        return view('users.client.show', compact('projects','user'));
    }


    /**
     * This fonction display all Project of client user
     * in profile
     * @return Response
     */
    public function displayAllMyProjects()
    {
        $proposals = Proposal::all();
        $projects = Project::where('user_id', Auth::user()->id)
        ->with('users')
        ->orderBy('id', 'desc')
        ->get();
        return view('users.client.projets.index', compact('projects', 'proposals'));
    }

      /**
     * This function show user actions page
     * @return Response
     */
    public function actions()
    {
        return view('users.client.home');
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
    public function show($id)
    {
        $user = Auth::user();
        return view('users.client.show', compact('user'));
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
        return view('users.client.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * Update Image and Desciption
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $id)
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
            $user->profile_image = $ProfileImageName;
        }

        $user->description = $request->input('description');
        $user->first_name = $request->input('first_name');
        $user->last_name =$request->input('last_name');
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

    public function getProjectProposals(Request $request)
    {
        $offers = $request->all();
        // return response()->json(['offert'=>$offers]);
        return view('users.client.projets.loadProposals', compact('offers'));
    }


}
