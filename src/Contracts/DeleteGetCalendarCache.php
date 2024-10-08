<?php

namespace WpService\Contracts;

interface DeleteGetCalendarCache
{
    /**
     * Purges the cached results of get_calendar.
     *
     * @see get_calendar()
     * @since 2.1.0
     */
    public function deleteGetCalendarCache(): void;
}
