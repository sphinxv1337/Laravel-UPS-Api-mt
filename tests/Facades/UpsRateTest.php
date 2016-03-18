<?php

namespace Rooferz\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Rooferz\LaravelUpsApi\Facades\UpsRate;
use Rooferz\Tests\LaravelUpsApi\TestCase;
use Ups\Rate;

/**
 * This is the UpsRateTest facade test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsRateTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.rate';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsRate::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Rate::class;
    }
}
