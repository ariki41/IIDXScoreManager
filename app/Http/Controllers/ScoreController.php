<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('score');
    }
}
