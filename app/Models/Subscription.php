<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function plan(){
        return $this->belongsTo(Plan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getCurrentPlanAttribute(){
        $today = Carbon::today();
        $start_date = $this->start_date;
        $end_date = $this->end_date;

        if ($today->greaterThanOrEqualTo($start_date) && $today->lessThanOrEqualTo($end_date)) {
            return true; 
        } else {
            return false; 
        }
        
    }

    public function getSubscriptionStatusAttribute(){
        $today = Carbon::today();
        $start_date = $this->start_date;
        $end_date = $this->end_date;

        if ($today->greaterThanOrEqualTo($start_date) && $today->lessThanOrEqualTo($end_date)) {
            return 1; 
        } else {
            return 0; 
        }
        
    }

    protected $appends  =   ['current_plan', 'subscription_status'];
}
