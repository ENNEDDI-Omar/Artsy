<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssigneArtisteStoreRequest;
use App\Http\Requests\AssigneArtisteUpdateRequest;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::all();
        return view('admin.projet.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectStoreRequest $request, Project $project)
    {
        
        $projectData = $request->validated();
        $projects=Project::create($projectData);
        $projects->addMediaFromRequest('affiche')->toMediaCollection('projects'); 
        return redirect()->route('projects.index')->with('success', 'Projet Ajouté avec succés!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

        $users = User::whereHas('roles', function ($query) {
            $query->where('nom', 'artiste');
        })->get();

        return view('admin.projet.show', compact('project', "users"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projet.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {   
        $projectData=$request->validated();
        $project->update($projectData);
        if ($request->hasFile('affiche')) {
            $project->clearMediaCollection('projects');
            $project->addMediaFromRequest('affiche')->toMediaCollection('projects');
        }
        return redirect()->route('projects.index')->with('success', 'Projet mis à jour avec succés!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('succes', 'Projet Supprimé avec Succés!');
    }

    public function assignArtist(AssigneArtisteStoreRequest $request, Project $project)
    {
      
        $validatedData = $request->validated();
        $artistIds = $validatedData['artist_id'] ?? [];
        $projectId = $request->input('project_id');
        $project=Project::find($projectId);
        $project->users()->attach($artistIds);

        return redirect()->route('projects.index')->with('success', 'Artistes assignés avec succès.');
    }


    
    

    // public function assignArtist(Request $request, Project $project)
    // {   dd($request->all());
    //     $validatedData = $request->validated();
    //     $artistIds = $validatedData['artist_id'] ?? [];
    
    //     // Use sync to synchronize the relationship
    //     $project->users()->sync($artistIds);
    
    //     return redirect()->route('projects.index')->with('success', 'Artistes assignés avec succès.');
    // }
    

    // public function reassignArtist(AssigneArtisteUpdateRequest $request, Project $project)
    // {
    // $request->validated();

    // $artistIds = $request->input('artist_id', []);
    // $project->users()->sync($artistIds);

    // return redirect()->route('projects.show', $project->id)->with('success', 'Artistes assignés avec succès.');
    // }
}
