<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Review;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function allTestimonials()
    {
        $reviews = Review::all();

        if (count($reviews) > 0) {

            $response = [
                'success' => true,
                'data' => $reviews
            ];
        } else {
            $response = [
                'success' => false
            ];
        }
        return response()->json($response);
    }

    public function allProjects(){
        $projects = Project::all();
        if(count($projects) > 0){
            $response = [
                'success' => true,
                'data' => $projects
            ];
        }else{
            $response = [
                'success' => false
            ];
        }
        return response()->json($response);
    }
}
