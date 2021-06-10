<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;

class TopController extends Controller
{
    public function get_Top()
    {
        return view('top');
    }
}
