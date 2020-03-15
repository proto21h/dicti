<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lak', 'ru', 'category', 'picture', 'description'];
}
