<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showUsers() {
       // DB::table('users')->getall();
        return view('users',['users' => ['Alex', 'John', 'Ali']]);
    }
}
