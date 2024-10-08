<?php

namespace WpService\Implementations;

use PHPUnit\Framework\TestCase;

class FakeWpServiceTest extends TestCase
{
    /**
     * @testdox class can be instantiated
     */
    public function testCanBeInstantiated()
    {
        $wpService = new FakeWpService();
        $this->assertInstanceOf(FakeWpService::class, $wpService);
    }

    /**
     * @testdox addAction()
     */
    public function testAddAction()
    {
        $wpService = new FakeWpService(['addAction' => true]);
        $callable  = fn () => null;

        $result = $wpService->addAction('testTag', $callable, 10, 1);

        $this->assertEquals([ 'testTag', $callable, 10, 1 ], $wpService->methodCalls['addAction'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox addFilter()
     */
    public function testAddFilter()
    {
        $wpService = new FakeWpService(['addFilter' => true]);
        $callable  = fn () => null;

        $result = $wpService->addFilter('testTag', $callable, 10, 1);

        $this->assertEquals([ 'testTag', $callable, 10, 1 ], $wpService->methodCalls['addFilter'][0]);
        $this->assertTrue($result);
    }
}
