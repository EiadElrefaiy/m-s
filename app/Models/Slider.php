<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';
    protected $fillable = [
        'label',
        'label_eng',
        'title',
        'title_eng',
        'description',
        'description_eng',
        'button_label',
        'button_label_eng',
        'button_url',
        'phone',
        'arrangement'
    ];
}
