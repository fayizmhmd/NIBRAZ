<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function viewGallery()
    {
        $galleries = Gallery::all();

        return view('admin.gallery.viewgallery', compact('galleries'));
    }

    public function addGallery()
    {
        return view('admin.gallery.addgallery');
    }

    public function saveGallery(Request $request)
    {

        $gallery                     = new Gallery();
        $gallery->name              = $request->name;
        $gallery->description        = $request->content;

        $images = [];

        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/gallerys/'), $imageName);
                $images[] = 'gallerys/' . $imageName;
            }
            $gallery->image = json_encode($images);
        }

        $gallery->save();
        return redirect()->route("admin.viewGallery")->with("message", "Gallery Saved Successfully");
    }

    public function editGallery($id)
    {
        $galleries = Gallery::find($id);
        return view('admin.gallery.editgallery', compact('galleries', 'id'));
    }



    public function updateGallery(Request $request, $id)


    {
        $gallery = Gallery::find($id);
        $gallery->name         =   $request->name;


        $gallery->description = $request->content;

        $images = [];
        if ($request->file('images')) {

            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/gallerys/'), $imageName);
                $images[] = 'gallerys/' . $imageName;
            }
        }
        $gallery->image = json_encode($images);

        $gallery->save();

        return redirect()->route('admin.viewGallery')->with('message', 'Gallery updated successfully');
    }


    public function deleteGallery($id)
    {
        $gallery = Gallery::find($id);

        if ($gallery) {
            if (!empty($gallery->image)) {
                Storage::delete('images/' . $gallery->image);
            }

            $gallery->delete();

            return redirect()->route('admin.viewGallery')->with('message', 'program deleted successfully');
        } else {
            return redirect()->route('admin.viewGallery')->with('message', 'program not found');
        }
    }


    public function toggleGallery($id)
    {
        $gallery = Gallery::find($id);
        if ($gallery) {
            $gallery->toggleActive();
            $gallery->save();
            return redirect()->back()->with(['message' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['message' => 'Something Went Wrong']);
        }
    }




}
