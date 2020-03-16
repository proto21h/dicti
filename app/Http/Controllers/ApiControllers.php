<?php

namespace App\Http\Controllers;

abstract class ApiControllers 
{

    protected $model;

    public function get(Request $request) 
    {
        $limit = (int) $request->get('limit', 100);
        $offset = (int) $request->get('offset', 0);

        $result = $this->model->limit($limit)->offset($offset)->get();

        return $this->sendResponse($request, 'OK', 200);
    }

    public function detail(int $objectId)
    {

    }

    public function update(int $objectId) 
    {
        
    }

    public function create() 
    {
        
    }

    public function delete(int $objectId) 
    {
        
    }


}