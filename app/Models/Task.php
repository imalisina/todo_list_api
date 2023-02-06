<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Define fillable fields to prevent mass assignment error
    protected $fillable = [
        "title",
        "description",
        "status",
    ];
    use HasFactory;
}
