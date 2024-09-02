<?php

namespace WpService\WpCronService\WpCronJob;

use PHPUnit\Framework\TestCase;

class WpCronJobTest extends TestCase
{
    /**
     * @testcase __construct() throws if $callback is not callable.
     */
    public function testConstructShouldThrowIfCallbackIsNotCallable()
    {
        $this->expectException(\TypeError::class);
        new WpCronJob('hook', 'interval', 'not_callable', ['arg1', 'arg2']);
    }

    /**
     * @testdox getHookName() returns the hook name.
     */
    public function testGetHookNameReturnsHookName()
    {
        $wpCronJob = new WpCronJob('hook', 'interval', fn() => null, ['arg1', 'arg2']);
        $this->assertEquals('hook', $wpCronJob->getHookName());
    }

    /**
     * @testdox getInterval() returns the interval.
     */
    public function testGetIntervalReturnsInterval()
    {
        $wpCronJob = new WpCronJob('hook', 'interval', fn() => null, ['arg1', 'arg2']);
        $this->assertEquals('interval', $wpCronJob->getInterval());
    }

    /**
     * @testdox getArgs() returns the args.
     */
    public function testGetArgsReturnsArgs()
    {
        $wpCronJob = new WpCronJob('hook', 'interval', fn() => null, ['arg1', 'arg2']);
        $this->assertEquals(['arg1', 'arg2'], $wpCronJob->getArgs());
    }

    /**
     * @testdox getCallback() returns the callback.
     */
    public function testGetCallbackReturnsCallback()
    {
        $callback  = fn() => null;
        $wpCronJob = new WpCronJob('hook', 'interval', $callback, ['arg1', 'arg2']);
        $this->assertEquals($callback, $wpCronJob->getCallback());
    }
}
