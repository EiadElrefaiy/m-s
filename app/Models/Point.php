<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $table = 'steps_points';
    protected $fillable = [
        'step_id',
        'title',
        'title_eng',
    ];

    public function step()
    {
        return $this->belongsTo(Step::class);
    }

}
