<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'action' => 'required|string',
            'isLink' => 'required|bool'

        ];
     }

     public function messages()
     {
         return [
             'title.required' => 'Title is required',
             'action.required' => 'Action is required',
             'isLink.required' => 'isLink should be bool'
         ];
     }
}
