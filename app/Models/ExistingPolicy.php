<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExistingPolicy extends Model
{
    use HasFactory;

    protected  $table = 'existing_policies';
    protected  $guarded = [];
}
