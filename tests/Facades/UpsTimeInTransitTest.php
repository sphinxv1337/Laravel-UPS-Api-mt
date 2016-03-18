<?php

namespace Rooferz\Tests\LaravelUpsApi\Facades;

use Rooferz\LaravelUpsApi\Facades\UpsTimeInTransit;
use Rooferz\Tests\LaravelUpsApi\TestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ups\TimeInTransit;

/**
 * This is the UpsTimeInTransitTest facade test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsTimeInTransitTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.time-in-transit';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsTimeInTransit::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return TimeInTransit::class;
    }
}
