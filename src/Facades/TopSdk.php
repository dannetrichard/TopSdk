<?php

namespace Dannetrichard\TopSdk\Facades;

use Illuminate\Support\Facades\Facade;

class TopSdk extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'topsdk';
    }
}