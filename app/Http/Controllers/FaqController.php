<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends ApiController
{
    //
    public function __construct(Faq $model) 
    {
        $this->model = $model;
    }    
}
