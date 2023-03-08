<?php

namespace App\Models\Backend\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'category',
        'galleryImage',
        'status'
    ];
    function galleryCat()
    {
        return $this->belongsTo(Gallery::class, 'category_id');
    }
}
