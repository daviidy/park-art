<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function profile()
    {
        $user_id = Auth::user()->id;
        $projects = Project::where('id' , $user_id)->get();
        // return dd($projects);
        return view('users.client.home', compact('projects'));
    }
}
