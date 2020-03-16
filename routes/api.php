<?php

use App\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/faqs')->group(function() {

    Route::get('/', ['uses'=>'FaqController@get']);
    Route::get('/{id}', ['uses'=>'FaqController@detail'])->where(['id' => '[0-9+]']);
    Route::post('/', ['uses'=>'FaqController@create']);

});