<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function viewsettings()
    {
        $settings = Setting::all();
        return view('admin.settings.settings', compact('settings'));
    }

    public function updatesettings(Request $request)
    {
        $settingsData = $request->input('settings', []);
        $Inputdata = $request->except('_token');

        foreach ($Inputdata as $key => $data) {
             Setting::where('key', $key)->update(['value' => $data]);

        }

       return redirect()->route('admin.viewsettings')->with('success', 'Settings updated successfully');
    }
}
