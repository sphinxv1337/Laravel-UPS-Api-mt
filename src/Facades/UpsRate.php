<?php

namespace Rooferz\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Rate facade class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsRate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ups.rate';
    }
}