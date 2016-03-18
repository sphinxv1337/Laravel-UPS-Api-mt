<?php

namespace Rooferz\Tests\LaravelUpsApi\Facades;

use Rooferz\LaravelUpsApi\Facades\UpsTradeability;
use Rooferz\Tests\LaravelUpsApi\TestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ups\Tradeability;

/**
 * This is the UpsTradeabilityTest facade test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsTradeabilityTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.tradeability';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsTradeability::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Tradeability::class;
    }
}
