<?php

namespace Rooferz\Tests;

use Rooferz\LaravelUpsApi\UpsApiServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test case class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return UpsApiServiceProvider::class;
    }
}