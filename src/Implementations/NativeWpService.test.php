<?php

namespace WpService\Implementations;

use PHPUnit\Framework\TestCase;

class NativeWpServiceTest extends TestCase
{
    public function testCanCreateInstance(): void
    {
        $wpService = new NativeWpService();

        $this->assertInstanceOf(NativeWpService::class, $wpService);
    }
}
