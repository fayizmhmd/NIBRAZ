<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\College;
use App\Models\Course;
use App\Models\Location;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        $colleges = College::all();
        $type_universities = College::where('type', 2)->get();
        $type_colleges = College::where('type', 1)->get();
        $categories = Category::all();
        $reviews = Review::all();
        $courses = Course::all();
        $locations = Location::all();

        $phone_number = Setting::where('key', 'phone_number')->first()->value;
        $mail_id = Setting::where('key', 'mail_id')->first()->value;
        $facebook = Setting::where('key', 'facebook')->first()->value;
        $instagram = Setting::where('key', 'instagram')->first()->value;
        $whatsapp = Setting::where('key', 'whatsapp')->first()->value;
        $youtube = Setting::where('key', 'youtube')->first()->value;

        return view('frontend.home', compact('categories', 'colleges', 'reviews', 'courses', 'locations', 'type_colleges', 'type_universities', 'phone_number', 'mail_id', 'facebook', 'instagram', 'whatsapp', 'youtube'));
    }

    public function allcolleges(Request $request)
    {
        // Retrieve selected course and location from the request
        $keyword = $request->input('key-word');
        $region = $request->input('region');


        $phone_number = Setting::where('key', 'phone_number')->first()->value;
        $mail_id = Setting::where('key', 'mail_id')->first()->value;
        $facebook = Setting::where('key', 'facebook')->first()->value;
        $instagram = Setting::where('key', 'instagram')->first()->value;
        $whatsapp = Setting::where('key', 'whatsapp')->first()->value;
        $youtube = Setting::where('key', 'youtube')->first()->value;

        // Initialize query
        $query = College::query();

        // Apply filters if provided
        if (!empty($keyword)) {
            $query->whereHas('courses', function ($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%');
            });
        }

        if (!empty($region)) {
            $query->whereHas('locations', function ($q) use ($region) {
                $q->where('name', $region);
            });
        }

        // Get the filtered or all colleges
        $colleges = $query->get();

        // Retrieve all locations
        $locations = Location::all();

        // Pass colleges and locations to the view
        return view('frontend.allcolleges', compact('colleges', 'locations', 'phone_number', 'mail_id', 'facebook', 'instagram', 'whatsapp', 'youtube'));
    }



    public function listByCategory($id)
    {
        $category = Category::findOrFail($id);
        $colleges = College::where('category_id', $id)->get();


        $phone_number = Setting::where('key', 'phone_number')->first()->value;
        $mail_id = Setting::where('key', 'mail_id')->first()->value;
        $facebook = Setting::where('key', 'facebook')->first()->value;
        $instagram = Setting::where('key', 'instagram')->first()->value;
        $whatsapp = Setting::where('key', 'whatsapp')->first()->value;
        $youtube = Setting::where('key', 'youtube')->first()->value;

       return view('frontend.CategoryListClgs', compact('category', 'colleges','phone_number', 'mail_id', 'facebook', 'instagram', 'whatsapp', 'youtube'));
    }
}
