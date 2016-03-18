<?php

namespace Rooferz\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Tracking facade class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsTimeInTransit extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ups.time-in-transit';
    }
}
