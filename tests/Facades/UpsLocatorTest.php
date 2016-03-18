<?php

namespace Rooferz\Tests\LaravelUpsApi\Facades;

use Rooferz\LaravelUpsApi\Facades\UpsLocator;
use Rooferz\Tests\LaravelUpsApi\TestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ups\Locator;

/**
 * This is the UpsLocatorTest facade test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsLocatorTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.locator';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsLocator::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Locator::class;
    }
}
