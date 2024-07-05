<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClientLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function ViewLogo() {

        $logos = ClientLogo::all();
        return view('admin.logo.viewlogo', compact('logos'));
    }
    public function addLogo() {
        return view('admin.logo.addlogo');
    }

    public function editLogo($id) {
        $logo = ClientLogo::find($id);
        return view('admin.logo.editlogo', compact('logo','id'));
    }

    public function saveLogo(Request $request) {
        $logo                     = new ClientLogo();
        $logo->name              = $request->name;

        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move(public_path('/logos/'), $imageName);
            @unlink(public_path($logo->image));
            $logo->image = 'logos/' . $imageName;
        }

        $logo->save();
        return redirect()->route('admin.viewlogo')->with("message", "Logo Saved Successfully");
    }

    public function updateLogo(Request $request, $id)


    {
        $logo = ClientLogo::find($id);
        $logo->name         =   $request->name;
        
        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move(public_path('/logos/'), $imageName);
            @unlink(public_path($logo->image));
            $logo->image = 'logos/' . $imageName;
        }

        $logo->save();

        return redirect()->route('admin.viewlogo')->with('message', 'Gallery updated successfully');
    }



    public function deleteLogo($id)
    {
        $logo = ClientLogo::find($id);

        if ($logo) {
            if (!empty($logo->image)) {
                Storage::delete('images/' . $logo->image);
            }

            $logo->delete();

            return redirect()->route('admin.viewlogo')->with('message', 'logo deleted successfully');
        } else {
            return redirect()->route('admin.viewlogo')->with('error', 'logo not found');
        }
    }

    
}
