<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsAddressValidation;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\AddressValidation;

/**
 * This is the UpsAddressValidationTest facade test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsAddressValidationTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.address-validation';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsAddressValidation::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return AddressValidation::class;
    }
}
