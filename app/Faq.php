<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['title', 'action', 'isLink'];
    // protected $casts = [
    //     'created_at' => 'timestamp', // convert to milliswc
    //     'updated_at' => 'timestamp',
    // ];
}
