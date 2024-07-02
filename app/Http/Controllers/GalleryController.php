<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function viewGallery(){
        return view('admin.gallery.viewgallery');
    }
    
}
