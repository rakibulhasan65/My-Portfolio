<?php

namespace App\Models\Backend\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_category',
        'categoryName',
        'status',
    ];
}
