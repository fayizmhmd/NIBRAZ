<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function ViewLogo() {
        return view('admin.logo.viewlogo');
    }
    public function addLogo() {
        return view('admin.logo.addlogo');
    }

    public function editLogo() {
        return view('admin.logo.editlogo');
    }

    public function saveLogo() {
        return view();
    }
}
