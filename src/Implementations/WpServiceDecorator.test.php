<?php

namespace WpService\Tests\Implementations;

use PHPUnit\Framework\TestCase;
use WpService\Implementations\WpServiceDecorator;
use WpService\Implementations\NativeWpService;

class WpServiceDecoratorTest extends TestCase
{
    /**
     * @testdox Can create an instance of the class
     */
    public function testCanCreateInstance()
    {
        $inner   = new NativeWpService();
        $service = new WpServiceDecorator($inner);
        $this->assertInstanceOf(WpServiceDecorator::class, $service);
    }
}
