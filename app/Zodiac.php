<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zodiac extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'good_character' => 'array',
        'bad_character' => 'array',
      ];
}
