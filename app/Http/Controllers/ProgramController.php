<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function viewPrograms()
    {
        $programs = Program::all();
        return view('admin.programs.viewprograms', compact('programs'));
    }


    public function addPrograms()
    {
        $programs = Program::all();
        return view('admin.programs.addprograms', compact('programs'));
    }


    public function savePrograms(Request $request)
    {
        $program               =   new Program();
        $program->name         =   $request->name;
        $program->duration = $request->duration;

        $program->description = $request->content;

        $images = [];
        if ($request->file('images')) {

            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/programs/'), $imageName);
                $images[] = 'programs/' . $imageName;
            }
        }
        $program->image = json_encode($images);

        $program->save();

        return redirect()->route('admin.viewPrograms')->with('message', 'program saved successfully');
    }

    public function toggleProgram($id)
    {
        $program = Program::find($id);
        if ($program) {
            $program->toggleActive();
            $program->save();
            return redirect()->back()->with(['success' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }


    public function editPrograms($id)
    {
        $programs = Program::find($id);
        return view("admin.programs.editprograms", compact('programs', 'id'));
    }


    public function updatePrograms(Request $request, $id)
    {
        $program = Program::find($id);
        $program->name         =   $request->name;
        $program->duration = $request->duration;

        $program->description = $request->content;

        $images = [];
        if ($request->file('images')) {

            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/programs/'), $imageName);
                $images[] = 'programs/' . $imageName;
            }
        }
        $program->image = json_encode($images);

        $program->save();

        return redirect()->route('admin.viewPrograms')->with('message', 'program saved successfully');
    }


    public function deletePrograms($id)
    {
        $program = Program::find($id);

        if ($program) {
            if (!empty($program->image)) {
                Storage::delete('images/' . $program->image);
            }

            $program->delete();

            return redirect()->route('admin.viewPrograms')->with('message', 'program deleted successfully');
        } else {
            return redirect()->route('admin.viewPrograms')->with('error', 'program not found');
        }
    }
}
