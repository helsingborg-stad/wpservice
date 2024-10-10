<?php

namespace WpService\Contracts;

interface HumanTimeDiff
{
    /**
     * Determines the difference between two timestamps.
     *
     * The difference is returned in a human-readable format such as "1 hour",
     * "5 mins", "2 days".
     *
     * @since 1.5.0
     * @since 5.3.0 Added support for showing a difference in seconds.
     *
     * @param int $from Unix timestamp from which the difference begins.
     * @param int $to   Optional. Unix timestamp to end the time difference. Default becomes time() if not set.
     * @return string Human-readable time difference.
     */
    public function humanTimeDiff(int $from, int $to): string;
}
