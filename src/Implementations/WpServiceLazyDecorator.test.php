<?php

namespace WpService\Implementations;

use PHPUnit\Framework\TestCase;

/**
 * Class WpServiceLazyDecoratorTest
 */
class WpServiceLazyDecoratorTest extends TestCase
{
    /**
     * @testdox Can create an instance of the class
     */
    public function testCanCreateInstance()
    {
        $inner   = new NativeWpService();
        $service = new WpServiceLazyDecorator($inner);
        $service->setInner($inner);
        $this->assertInstanceOf(WpServiceLazyDecorator::class, $service);
    }

    /**
     * @testdox Allows setting the WP service
     */
    public function testAllowsSettingTheWpService(): void
    {
        $wpService              = new NativeWpService();
        $wpServiceLazyDecorator = new WpServiceLazyDecorator();
        $wpServiceLazyDecorator->setInner($wpService);

        $this->assertSame($wpService, $wpServiceLazyDecorator->inner);
    }

    /**
     * @testdox The inner WP service is null by default
     */
    public function testInnerWpServiceIsNullByDefault(): void
    {
        $wpServiceLazyDecorator = new WpServiceLazyDecorator();

        $this->assertNull($wpServiceLazyDecorator->inner);
    }
}
