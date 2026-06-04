<?php

namespace WpService\Contracts;

interface TimerFloat
{
/**
 * Gets the time elapsed so far during this PHP script.
 *
 * @since 5.8.0
 *
 * @return float Seconds since the PHP script started.
 */
    public function timerFloat(): float;
}
