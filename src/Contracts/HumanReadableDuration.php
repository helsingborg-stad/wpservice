<?php

namespace WpService\Contracts;

interface HumanReadableDuration
{
    /**
     * Converts a duration to human readable format.
     *
     * @since 5.1.0
     *
     * @param string $duration Duration will be in string format (HH:ii:ss) OR (ii:ss),
     *                         with a possible prepended negative sign (-).
     * @return string|false A human readable duration string, false on failure.
     */
    public function humanReadableDuration(string $duration = ''): string|false;
}
