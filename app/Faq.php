<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['title', 'action', 'isLink'];
    protected $casts = [
        'created_at' => 'datetime:d/m/Y', // Свой формат
        'updated_at' => 'datetime:d/m/Y',
    ];
}
