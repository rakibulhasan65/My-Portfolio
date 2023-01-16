<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Banner;

class Profession extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner_id',
        'devSkillsCategory',
        'status'
    ];
    function developerCategory()
    {
        return $this->belongsTo(Banner::class, 'banner_id');
    }
}
