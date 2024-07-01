<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'seo',
        'description',
        'image',
        'slug',
        'is_active',
    ];

    public function toggleActive()
    {
        $this->is_active = !$this->is_active;
        return $this;
    }
}
