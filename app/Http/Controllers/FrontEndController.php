<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClientLogo;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        $reviews = Review::all();
        $projects =  Project::where('is_active', 1)->get();
        $logos = ClientLogo::all();
        return view('frontend.home', compact('reviews','projects','logos'));
    }


    public function Gallery(){
        $galleries =  Gallery::where('is_active', 1)->get();
        return view('frontend.gallery',compact('galleries'));
    }

    public function AboutUs()
    {

        return view('frontend.aboutus');
    }

    public function ContactUs()
    {
        return view('frontend.contactus');
    }

    public function Project()
    {
        $projects = Project::where('is_active', 1)->get();
        return view('frontend.project',compact('projects'));
    }



}
