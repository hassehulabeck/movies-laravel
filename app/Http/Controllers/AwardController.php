<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cannes;
use App\Oscar;
use App\facades\AwardFacade;

class AwardController extends Controller
{
    public function index()
    {
        dd(AwardFacade::showAward());
    }
}
