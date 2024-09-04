<?php

namespace WpCronService;

use PHPUnit\Framework\TestCase;
use WpService\Implementations\FakeWpService;
use WpCronService\WpCronJob\WpCronJob;

class WpCronJobManagerTest extends TestCase
{
    /**
     * @testdox register() should call scheduleEvent() if the cron job is not scheduled.
     */
    public function testRegisterCronJobShouldAddACronJobToTheManager()
    {
        $job       = new WpCronJob('test_hook', time(), 'interval', fn() => null, ['arg1', 'arg2']);
        $wpService = new FakeWpService(['nextScheduled' => false]);
        $manager   = new WpCronJobManager('prefix_', $wpService);

        $manager->register($job);

        $this->assertCount(1, $wpService->methodCalls['addAction']);
        $this->assertCount(1, $wpService->methodCalls['scheduleEvent']);
        $this->assertEquals(
            ['prefix_' . $job->getHookName(), $job->getCallback()],
            $wpService->methodCalls['addAction'][0]
        );
        $this->assertEquals(
            [time(), $job->getSchedule(), 'prefix_' . $job->getHookName(), $job->getArgs()],
            $wpService->methodCalls['scheduleEvent'][0]
        );
    }

    /**
     * @testdox register() should not call scheduleEvent() if job already scheduled.
     */
    public function testRegisterCronJobShouldNotAddACronJobToTheManagerIfAlreadyScheduled()
    {
        $job       = new WpCronJob('test_hook', time(), 'daily', fn() => null, ['arg1', 'arg2']);
        $wpService = new FakeWpService(['getCronArray' => $this->getCronArray()]);
        $manager   = new WpCronJobManager('prefix_', $wpService);

        $manager->register($job);

        $this->assertCount(1, $wpService->methodCalls['addAction']);
        $this->assertArrayNotHasKey('scheduleEvent', $wpService->methodCalls);
    }

    /**
     * @testdox delete() removes jobs by hook name.
     */
    public function testDelete()
    {
        $wpService = new FakeWpService(['getCronArray' => $this->getCronArray()]);
        $manager   = new WpCronJobManager('prefix_', $wpService);

        $manager->delete('test_hook');

        $this->assertCount(1, $wpService->methodCalls['clearScheduledHook']);
        $this->assertEquals(
            ['prefix_test_hook', ['arg1', 'arg2']],
            $wpService->methodCalls['clearScheduledHook'][0]
        );
    }

    /**
     * @testdox deleteAll() removes all cron jobs.
     */
    public function testDeleteAll()
    {
        $wpService = new FakeWpService(['getCronArray' => $this->getCronArray()]);
        $manager   = new WpCronJobManager('prefix_', $wpService);

        $manager->deleteAll();

        $this->assertCount(1, $wpService->methodCalls['clearScheduledHook']);
        $this->assertEquals(
            [ 'prefix_test_hook', ['arg1', 'arg2'] ],
            $wpService->methodCalls['clearScheduledHook'][0]
        );
    }

    /**
     * @testdox getPrefix() returns the prefix.
     */
    public function testGetPrefix()
    {
        $wpService = new FakeWpService();
        $manager   = new WpCronJobManager('prefix_', $wpService);

        $this->assertEquals('prefix_', $manager->getPrefix());
    }

    private function getCronArray(): array
    {
        return [
            1215063606 => [
                'prefix_test_hook' => [
                    '3288dd58bff87f2c783186790dde4617' => [
                        'interval' => 86400,
                        'schedule' => 'daily',
                        'args'     => ['arg1', 'arg2']
                    ]
                ],
                'wp_version_check' => [
                    '3288dd58bff87f2c783186790dde4617' => [
                        'interval' => 43200,
                        'schedule' => 'twicedaily',
                        'args'     => []
                    ]
                ]
            ]
        ];
    }
}
