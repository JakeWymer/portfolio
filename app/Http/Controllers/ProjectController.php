<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function addProject(Request $request) {        
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

        $project = new Project;

        $project->name         = $request->input('name');
        $project->image         = $name;
        $project->github = $request->input('github');
        $project->description = $request->input('description');

        $project->save();

        return redirect('/admin');
    }
}
