<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsTimeInTransit;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
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
