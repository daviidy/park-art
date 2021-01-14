<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ImageResize;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Auth::user()->projects;
        
        return view('users.client.home', compact('projects'));
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
}
