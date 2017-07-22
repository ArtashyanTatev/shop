<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'header', 'title', 'description'
    ];
}
