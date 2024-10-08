<?php

namespace WpService\Implementations;

use PHPUnit\Framework\TestCase;

class NativeWpServiceTest extends TestCase
{
    /**
     * @testdox Can create an instance of the class
     */
    public function testCanCreateInstance()
    {
        $service = new NativeWpService();
        $this->assertInstanceOf(NativeWpService::class, $service);
    }
}
