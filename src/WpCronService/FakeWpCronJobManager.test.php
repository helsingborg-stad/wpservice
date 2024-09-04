<?php

namespace WpCronService;

use PHPUnit\Framework\TestCase;
use WpCronService\WpCronJob\WpCronJob;

class FakeWpCronJobManagerTest extends TestCase
{
    /**
     * @testdox upsert()
     */
    public function testUpsert()
    {
        $manager = new FakeWpCronJobManager();
        $cronJob = new WpCronJob('test', 'hourly', fn() => null, []);
        $manager->register($cronJob);
        $this->assertCount(1, $manager->methodCalls['register']);
        $this->assertEquals([$cronJob], $manager->methodCalls['register'][0]);
    }

    /**
     * @testdox delete()
     */
    public function testDelete()
    {
        $manager = new FakeWpCronJobManager();
        $cronJob = new WpCronJob('test', 'hourly', fn() => null, []);
        $manager->delete($cronJob);
        $this->assertCount(1, $manager->methodCalls['delete']);
        $this->assertEquals([$cronJob], $manager->methodCalls['delete'][0]);
    }

    /**
     * @testdox deleteAll()
     */
    public function testDeleteAll()
    {
        $manager = new FakeWpCronJobManager();
        $manager->deleteAll();
        $this->assertCount(1, $manager->methodCalls['deleteAll']);
    }

    /**
     * @testdox getPrefix()
     */
    public function testGetPrefix()
    {
        $manager = new FakeWpCronJobManager(['getPrefix' => 'test']);
        $prefix  = $manager->getPrefix();
        $this->assertCount(1, $manager->methodCalls['getPrefix']);
        $this->assertEquals('test', $prefix);
    }

    /**
     * @testdox getPrefix() with a default return value
     */
    public function testGetPrefixWithDefaultReturnValue()
    {
        $manager = new FakeWpCronJobManager();
        $prefix  = $manager->getPrefix();
        $this->assertCount(1, $manager->methodCalls['getPrefix']);
        $this->assertEquals('', $prefix);
    }
}
