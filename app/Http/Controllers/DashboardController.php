<?php

namespace App\Http\Controllers;

//use App\Models\Permission;


use Spatie\Permission\Models\Permission;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::all();
        $totalSubscriptions = Subscription::all();

        return view('admin.dashboard.dashboard', [
            'totalUsers' => count($totalUsers),
            'totalSubscriptions' => count($totalSubscriptions),

        ]);
    }


}
