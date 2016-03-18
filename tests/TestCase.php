<?php

namespace Rooferz\Tests\LaravelUpsApi;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Rooferz\LaravelUpsApi\UpsApiServiceProvider;

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
