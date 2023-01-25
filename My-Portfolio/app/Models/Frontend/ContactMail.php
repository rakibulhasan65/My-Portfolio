<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMail extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'time',
    ];
}
