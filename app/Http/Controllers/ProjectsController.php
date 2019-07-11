<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    
    public function index()

    {
        $projects = Project::where('owner_id', auth()->id())->get();
        //$projects = Project::all();
        return view('projects.index', compact('projects'));

    }

    public function show(Project $project)
    {
        abort_if($project->owner_id !== auth()->id(), 403);
        //return $project;
        //$project = Project::findOrFail($id);
        return view('projects.show', compact('project'));



    }
    public function create()

    {
        return view('projects.create');

    }

    public function store()
    {   
    
       Project::create([

            'title' => request('Task'),
            'description' => request('Taskdescription'),
            'owner_id' => auth()->id()
            

       ]);

       return redirect('/projects'); 

    }

    public function edit(Project $project)

    {       //$project = Project::findOrFail($id);


        return view('projects.edit', compact('project'));


    }

    public function update(Project $project)
    {

      /*  $project = Project::find($id)
       
        $project->title = request('Task');
        $project->description = request('Taskdescription');
        $project->save();

        return redirect('/projects'); */
        //$project = Project::findOrFail($id);
        $project->title = request('Task');
        $project->description = request('Taskdescription');

        $project->save();

        return redirect('/projects');

        /*$this->authorize('update', $project);
        $project->update(request(['title', 'description']));
                return redirect('/projects');*/


         
    }

        public function destroy(Project $project)
        {

            //Project::findOrFail($id)->delete();
            $project->delete();
            return redirect('/projects');
        }






}
