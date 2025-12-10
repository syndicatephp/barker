<?php

namespace Syndicate\Barker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Syndicate\Barker\Barker
 */
class Barker extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Syndicate\Barker\Barker::class;
    }
}
