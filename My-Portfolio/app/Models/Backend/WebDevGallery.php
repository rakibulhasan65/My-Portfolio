<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebDevGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'weDevelopment',
        'status'
    ];
}
