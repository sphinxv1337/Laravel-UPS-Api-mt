<?php

namespace Ptondereau\Tests\LaravelUpsApi;

use Illuminate\Support\Facades\Config;

/**
 * This is the config test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class ConfigTest extends TestCase
{
    public function testAccessKeyConfig()
    {
        $this->assertEquals(Config::get('ups.access_key'), null);
    }

    public function testUserIdConfig()
    {
        $this->assertEquals(Config::get('ups.user_id'), null);
    }

    public function testPasswordConfig()
    {
        $this->assertEquals(Config::get('ups.password'), null);
    }
}
