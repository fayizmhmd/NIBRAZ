<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position',
        'review',
        'image',
        'is_active',
    ];
    public function toggleActive()
    {
        $this->is_active = !$this->is_active;
    }
}
