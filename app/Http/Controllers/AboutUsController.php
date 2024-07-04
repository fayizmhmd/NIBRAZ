<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function AboutUs()
    {
        $reviews = Review::all();

        return view('frontend.aboutus',compact('reviews'));
    }
}
