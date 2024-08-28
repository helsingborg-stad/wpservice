<?php

namespace WpService\Implementations;

use PHPUnit\Framework\TestCase;

/**
 * Class WpServiceDecorator
 *
 * Implements the WPService interface.
 */
class WpServiceWithTypecastedReturnsTests extends TestCase
{
    /**
     * @dataProvider provideGetQueryVarTestCases
     */
    public function testGetQueryVarReturnsTypecastedValue($input, $expected)
    {
        $fakeWpService = new FakeWpService(
            ['getQueryVar' => $input]
        );
        $wpService     = new WpServiceWithTypecastedReturns($fakeWpService);
        $result        = $wpService->getQueryVar('getQueryVar');
        $this->assertEquals($expected, $result);
    }

    private function provideGetQueryVarTestCases()
    {
        return [
            ['42', 42],
            ['false', false],
            ['true', true],
            ['null', null],
            ['', null],
            ['foo', 'foo'],
        ];
    }
}
