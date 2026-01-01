<?php

namespace Ht3aa\AlwaseetDelivery\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ht3aa\AlwaseetDelivery\AlwaseetDelivery
 */
class AlwaseetDelivery extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ht3aa\AlwaseetDelivery\AlwaseetDelivery::class;
    }
}
