<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function viewProjects()
    {
        $projects = Project::all();
        return view('admin.projects.viewprojects', compact('projects'));
    }


    public function addProjects()
    {
        $projects = Project::all();
        return view('admin.projects.addprojects', compact('projects'));
    }


    public function saveProjects(Request $request)
    {
        $project               =   new Project();
        $project->name         =   $request->name;
        $project->seo = $request->seo;

        $project->description = $request->editordata;

        $images = [];
        if ($request->file('images')) {

            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/projects/'), $imageName);
                $images[] = 'projects/' . $imageName;
            }
        }
        $project->image = json_encode($images);

        $project->save();

        return redirect()->route('admin.viewProjects')->with('message', 'project saved successfully');
    }


    public function editProjects($id)
    {
        $projects = Project::find($id);
        return view('admin.projects.editprojects', compact('projects', 'id'));
    }


    public function updateProjects(Request $request, $id)
    {
        $project = Project::find($id);
        $project->name         =   $request->name;
        $project->seo = $request->seo;

        $project->description = $request->editordata;

        $images = [];
        if ($request->file('images')) {

            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/projects/'), $imageName);
                $images[] = 'projects/' . $imageName;
            }
        }
        $project->image = json_encode($images);

        $project->save();

        return redirect()->route('admin.viewProjects')->with('message', 'project saved successfully');
    }

    public function deleteProjects($id)
    {
        $project = Project::find($id);

        if ($project) {
            if (!empty($project->image)) {
                Storage::delete('images/' . $project->image);
            }

            $project->delete();

            return redirect()->route('admin.viewProjects')->with('message', 'program deleted successfully');
        } else {
            return redirect()->route('admin.viewProjects')->with('error', 'program not found');
        }
    }


    public function toggleProject($id)
    {
        $project = Project::find($id);
        if ($project) {
            $project->toggleActive();
            $project->save();
            return redirect()->back()->with(['message' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }
}
