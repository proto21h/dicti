<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Faq;

class FaqController extends ApiController
{
    //
    public function __construct(Faq $model) 
    {
        $this->model = $model;   
    }    

    public function createFaq(FaqRequest $request)
    {
        return $this->create($request);
    }

    public function updateFaq(int $entityId, FaqRequest $request) 
    {
        return parent::update($entityId, $request);
    }
}
