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

        $phone_number = Setting::where('key', 'phone_number')->first()->value;
        $mail_id = Setting::where('key', 'mail_id')->first()->value;
        $facebook = Setting::where('key', 'facebook')->first()->value;
        $instagram = Setting::where('key', 'instagram')->first()->value;
        $whatsapp = Setting::where('key', 'whatsapp')->first()->value;
        $youtube = Setting::where('key', 'youtube')->first()->value;

        return view('frontend.aboutus',compact('reviews','phone_number', 'mail_id', 'facebook', 'instagram', 'whatsapp', 'youtube'));
    }
}
