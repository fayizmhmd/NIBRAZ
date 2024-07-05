<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClientLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function ViewLogo() {
        return view('admin.logo.viewlogo');
    }
    public function addLogo() {
        return view('admin.logo.addlogo');
    }

    public function editLogo($id) {
        $logos = ClientLogo::find($id);
        return view('admin.logo.editlogo', compact('logos','id'));
    }

    public function saveLogo(Request $request) {
        $logos                     = new ClientLogo();
        $logos->name              = $request->name;
        $logos->description        = $request->content;

        $images = [];

        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/logos/'), $imageName);
                $images[] = 'logos/' . $imageName;
            }
            $logos->image = json_encode($images);
        }

        $logos->save();
        return redirect()->route('admin.viewlogo')->with("message", "Logo Saved Successfully");
    }

    public function updateLogo(Request $request, $id)


    {
        $logos = ClientLogo::find($id);
        $logos->name         =   $request->name;
       

        $logos->description = $request->content;

        $images = [];
        if ($request->file('images')) {

            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/logos/'), $imageName);
                $images[] = 'logos/' . $imageName;
            }
        }
        $logos->image = json_encode($images);

        $logos->save();

        return redirect()->route('admin.viewlogo')->with('message', 'Gallery updated successfully');
    }



    public function deleteLogo($id)
    {
        $logos = ClientLogo::find($id);

        if ($logos) {
            if (!empty($logos->image)) {
                Storage::delete('images/' . $logos->image);
            }

            $logos->delete();

            return redirect()->route('admin.viewlogo')->with('message', 'logo deleted successfully');
        } else {
            return redirect()->route('admin.viewlogo')->with('error', 'logo not found');
        }
    }

    
}
