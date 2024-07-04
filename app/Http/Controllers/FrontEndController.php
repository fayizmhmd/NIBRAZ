<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\College;
use App\Models\Course;
use App\Models\Location;
use App\Models\Project;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        $reviews = Review::all();
        $projects = Project::all();
        return view('frontend.home', compact('reviews','projects'));
    }


    public function Gallery(){
        return view('frontend.gallery');
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
        return view('frontend.project');
    }



}
