<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'aboutImage',
        'aboutTitle',
        'aboutDescription',
        'name',
        'degree',
        'phone',
        'email',
        'address',
        'birth',
        'experience',
        'freelance',
        'status',
    ];
}
