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

        // Create a new project record
        $project = new Project();
        $project->name = $request->input('name');
        $project->seo = $request->input('seo');
        $project->description = $request->input('editordata');

        // Handle the is_notable checkbox
        $project->is_notable = $request->has('is_notable') ? 1 : 0; // Set to 1 if checked, otherwise 0

        // Handle image upload
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/projects/'), $imageName);
                $images[] = 'projects/' . $imageName;
            }
        }
        $project->image = json_encode($images);

        // Save the project to the database
        $project->save();

        // Redirect or return a response
        return redirect()->route('admin.viewProjects')->with('message', 'Project saved successfully');
    }



    public function editProjects($id)
    {
        $projects = Project::find($id);
        return view('admin.projects.editprojects', compact('projects', 'id'));
    }


    public function updateProjects(Request $request, $id)
    {
        // Find the project by ID
        $project = Project::findOrFail($id);

        // Update project details
        $project->name = $request->input('name');
        $project->seo = $request->input('seo');
        $project->description = $request->input('editordata');

        // Handle the is_notable checkbox
        $project->is_notable = $request->has('is_notable') ? 1 : 0;

        // Handle image upload
        $existingImages = json_decode($project->image, true) ?? [];
        $newImages = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/projects/'), $imageName);
                $newImages[] = 'projects/' . $imageName;
            }
        }

        // Combine existing images with new images
        $allImages = array_merge($existingImages, $newImages);
        $project->image = json_encode($allImages);

        // Save the project to the database
        $project->save();

        // Redirect or return a response
        return redirect()->route('admin.viewProjects')->with('message', 'Project updated successfully');
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
