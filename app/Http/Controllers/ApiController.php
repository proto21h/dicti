<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ApiController extends Controller
{

    protected $model;

    public function get(Request $request) 
    {
        $limit = (int) $request->get('limit', 100);
        $offset = (int) $request->get('offset', 0);

        $result = $this->model->limit($limit)->offset($offset)->get();

        //dd(date('M j, Y',$this->model->get_attribute('created_at')));
        //dd($result->find(2)->created_at->timestamp);  // date in millisec

        return $this->sendResponse($result, 'OK', 200);
    }

    public function detail(int $entityId, Request $request)
    {
        $entity = $this->model->find($entityId)->first();
        if (!$entity) {
            return $this->sendError('Not found', 404);
        }
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