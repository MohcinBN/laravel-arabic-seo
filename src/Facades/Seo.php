<?php

namespace ArabicSeo\Seo\Facades;

use Illuminate\Support\Facades\Facade;

class Seo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'seo';
    }
}
