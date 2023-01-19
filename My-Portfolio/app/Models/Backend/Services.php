<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'serviceIcon',
        'serviceTitle',
        'serviceDescription',
        'status',
    ];
}
