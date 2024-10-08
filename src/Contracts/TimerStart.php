<?php

namespace WpService\Contracts;

interface TimerStart
{
    /**
 * Starts the WordPress micro-timer.
 *
 * @since 0.71
 * @access private
 *
 * @global float $timestart Unix timestamp set at the beginning of the page load.
 * @see timer_stop()
 *
 * @return bool Always returns true.
 */
    public function timerStart(): bool;
}
