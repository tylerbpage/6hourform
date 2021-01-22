<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'message'
    ];
}
