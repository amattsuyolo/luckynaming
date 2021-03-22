<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    protected $fillable = [
        'sign_topic', 'sign_content', 'pic', 'analysis'
    ];
}
