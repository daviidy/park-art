<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest();
    
        return view('users.projets.index', compact('projects'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('users.client.projets.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Project::create($request->all());

        return redirect()->route('displayAllMyProjects')
                        ->with('success','Projet Ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Proposal $proposals)
    {
        return view('projects.show',compact('project', 'proposals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('users.client.projets.edit', compact(['project','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'budget' => 'required',
        ]);

        $project->update($request->all());
        session(['notification_icon'=>'check_circle']);
        Flashy::success('Projet modifié avec succès');
        return back();

            return redirect()->route('displayAllMyProjects');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('displayAllMyProjects')
                        ->with('success','Project supprimer avec succès');
    }

    /**
     * Display all projects on nos-projects page
     * @return Response
     */
    public function allProjects()
    {
        $categories = Category::with('projects')
        ->get();
       // return response()->json($projects);
        return view('projects.index', compact('categories'));
    }

    /**
     * Display a project on all projects list
     * @param  $project_id
     * @return Response
     */
    public function displayProject($project_id)
    {
        $proposal = Proposal::all()->where('project_id', $project_id);
        $hasProposal = false;
       foreach($proposal as $p){
           if ($p->user_id == Auth::user()->id){
               $hasProposal = true;
               break;
           }
       }
        $project = Project::find($project_id);
        return view('users.client.projets.show', compact('project', 'proposal','hasProposal'));
    }

    public function deleteProject($project_id)
    {
        $project = Project::where('id', $project_id)->first();
        if($project->delete()){
            session(['notification_icon'=>'check_circle']);
            Flashy::success('Projet supprimé avec succès');
            return back();
        }

        session(['notification_icon'=>'error']);
        Flashy::success('Une erreur est survenue lors de la suppression');
        return back();
    }
}
