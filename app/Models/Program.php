<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'duration',
        'description',
        'image',
        'is_active',
    ];

    public function toggleActive()
    {
        $this->is_active = !$this->is_active;
        return $this;
    }
}
