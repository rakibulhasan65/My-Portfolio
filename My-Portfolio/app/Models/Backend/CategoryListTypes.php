<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\HireMeModel;

class CategoryListTypes extends Model
{
    use HasFactory;
    protected $fillable = [
        "cat_id",
        "catTitleDetails",
        "status"
    ];

    public function hireMe()
    {
        return $this->belongsTo(HireMeModel::class, 'cat_id');
    }
}
