<?php

namespace WpService\Contracts;

interface GetSchedules
{
    /**
     * Retrieve the list of all available schedule names.
     *
     * @see https://developer.wordpress.org/reference/functions/wp_get_schedules/
     *
     * @return array List of available schedule names.
     */
    public function getSchedules(): array;
}
