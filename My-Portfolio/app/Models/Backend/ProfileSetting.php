<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'websiteTitle',
        'siteLogo',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'github',
        'status',
    ];
}
