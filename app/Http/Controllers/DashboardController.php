<?php

namespace App\Http\Controllers;

//use App\Models\Permission;

use App\Models\Gallery;
use App\Models\Project;
use App\Models\Review;
use App\Models\Subscription;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalSubscriptions = Subscription::all();
        $totalProjects = Project::all();
        $totalGalleries = Gallery::all();
        $totalTestimonials = Review::all();


        return view('admin.dashboard.dashboard', [
            'totalSubscriptions' => count($totalSubscriptions),
            'totalProjects' => count($totalProjects),
            'totalGalleries' => count($totalGalleries),
            'totalTestimonials' => count($totalTestimonials),

        ]);
    }


}
