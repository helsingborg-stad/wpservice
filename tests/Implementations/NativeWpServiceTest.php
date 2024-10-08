<?php

namespace WpService\Tests\Implementations;

use PHPUnit\Framework\TestCase;
use WpService\Implementations\NativeWpService;

class NativeWpServiceTest extends TestCase
{
    /**
     * @testdox Can create an instance of the class
     */
    public function testCanCreateInstance() {
        $service = new NativeWpService();
        $this->assertInstanceOf(NativeWpService::class, $service);
    }
}