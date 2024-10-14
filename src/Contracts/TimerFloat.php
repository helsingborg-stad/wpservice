<?php

namespace WpService\Contracts;

interface TimerFloat
{
/**
 * Gets the time elapsed so far during this PHP script.
 *
 * Uses REQUEST_TIME_FLOAT that appeared in PHP 5.4.0.
 *
 * @since 5.8.0
 *
 * @return float Seconds since the PHP script started.
 */
    public function timerFloat(): float;
}
