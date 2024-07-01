<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function viewSubscriptions()
    {
        $subscriptions = Subscription::all();
        return view('admin.subscriptions.viewsubscriptions', [
            'subscriptions' => $subscriptions
        ]);
    }
}
