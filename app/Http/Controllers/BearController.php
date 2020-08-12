<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bear;

class BearController extends Controller
{
    public function index(Bear $bear)
    {
        dd($bear->sound());
    }
}
