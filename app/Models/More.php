<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class More extends Model
{
    use HasFactory;
    protected $table = 'more_services';
    protected $fillable = [
        'image',
        'title',
        'title_eng',
        'description',
        'description_eng',
        'arrangement'
    ];
}
