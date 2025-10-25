<?php

namespace Herkod\Tests;

use Herkod\AppServiceProvider;
use PHPUnit\Framework\TestCase;

class AppServiceProviderTest extends TestCase
{
    public function testServiceProviderCanBeInstantiated()
    {
        $provider = new AppServiceProvider(app());
        
        $this->assertInstanceOf(AppServiceProvider::class, $provider);
    }

    public function testServiceProviderHasBootMethod()
    {
        $provider = new AppServiceProvider(app());
        
        $this->assertTrue(method_exists($provider, 'boot'));
    }

    public function testServiceProviderHasRegisterMethod()
    {
        $provider = new AppServiceProvider(app());
        
        $this->assertTrue(method_exists($provider, 'register'));
    }
}
