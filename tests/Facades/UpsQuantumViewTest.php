<?php

namespace Rooferz\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Rooferz\LaravelUpsApi\Facades\UpsQuantumView;
use Rooferz\Tests\LaravelUpsApi\TestCase;
use Ups\QuantumView;

/**
 * This is the UpsQuantumViewTest facade test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsQuantumViewTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.quantum-view';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsQuantumView::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return QuantumView::class;
    }
}
