<?php

namespace WpCronService\WpCronJob;

interface WpCronJobInterface
{
    /**
     * Get the hook name.
     *
     * @return string The hook name.
     */
    public function getHookName(): string;

    /**
     * Get the schedule.
     *
     * @return string The schedule.
     */
    public function getSchedule(): string;

    /**
     * Get the arguments.
     *
     * @return array The arguments.
     */
    public function getArgs(): array;

    /**
     * Get the callback.
     *
     * @return callable The callback.
     */
    public function getCallback(): callable;
}
