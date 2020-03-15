<?php

namespace App\Http\Controllers;
use App\Word;

class WordsController extends Controller
{
    public function index() {
        $words_list = Word::get();
        return view('words', compact('words_list'));
    }

    public function show($filter_category) {
        $words_list = Word::where('category', $filter_category)->get();
        return view('words', compact('words_list'));
    }
}
