<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Faq;

class FaqController extends ApiController
{
    //
    public function __construct(Faq $model, FaqRequest $request) 
    {
        //$model::all();
        //dd($model);
        $this->model = $model;
        $this->request = $request;
        
    }    
}
