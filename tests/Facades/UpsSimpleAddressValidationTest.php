<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsSimpleAddressValidation;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\SimpleAddressValidation;

/**
 * This is the UpsSimpleAddressValidationTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsSimpleAddressValidationTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.simple-address-validation';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsSimpleAddressValidation::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return SimpleAddressValidation::class;
    }
}
