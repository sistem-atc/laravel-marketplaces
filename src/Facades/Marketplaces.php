<?php

namespace SistemAtc\Marketplaces\Facades;

use Illuminate\Support\Facades\Facade;

class Marketplaces extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'marketplaces.manager';
    }
}