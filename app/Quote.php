<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //

    protected $fillable=[
        'first_name',
        'last_name',
        'phone',
        'message',
        'is_active'

    ];
}
