<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControler extends Controller
{
    //
    public function Welcome()
    {
        return view('resources.views.welcome');
    }
}
