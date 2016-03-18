<?php

namespace Rooferz\Tests\LaravelUpsApi\Facades;

use Rooferz\LaravelUpsApi\Facades\UpsTracking;
use Rooferz\Tests\LaravelUpsApi\TestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ups\Tracking;

/**
 * This is the UpsTrackingTest facade test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsTrackingTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.tracking';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsTracking::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Tracking::class;
    }
}
