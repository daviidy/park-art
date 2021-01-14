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
        // $datas = Project::latest()->paginate(5);
        $projects = Auth::user()->projects;
        
        return view('users.client.home', compact('projects'));
    }

    public function userprofil()
    {
        return view('users.client.show');
    }
}
