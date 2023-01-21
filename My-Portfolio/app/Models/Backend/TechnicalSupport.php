<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalSupport extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'profession',
        'description',
        'status',
    ];
}
