<?php

namespace WpService\Contracts;

interface GetCronArray
{
    /**
     * Retrieves cron info array option.
     *
     * @return array<string, array<string, array<string, mixed>>> The list of all cron jobs.
     */
    public function getCronArray(): array;
}
