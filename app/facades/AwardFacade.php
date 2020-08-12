<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AwardFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App\Cannes';
    }
}
