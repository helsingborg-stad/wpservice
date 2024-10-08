<?php

namespace WpService\Tests\Implementations;

use PHPUnit\Framework\TestCase;
use WpService\Implementations\WpServiceLazyDecorator;
use WpService\Implementations\NativeWpService;

class WpServiceLazyDecoratorTest extends TestCase
{
    /**
     * @testdox Can create an instance of the class
     */
    public function testCanCreateInstance() {
        $inner = new NativeWpService();
        $service = new WpServiceLazyDecorator($inner);
        $service->setInner($inner);
        $this->assertInstanceOf(WpServiceLazyDecorator::class, $service);
    }
}