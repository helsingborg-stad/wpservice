<?php

namespace WpService\Contracts;

interface WpNonceTick
{
    /**
     * Returns the time-dependent variable for nonce creation.
     *
     * A nonce has a lifespan of two ticks. Nonces in their second tick may be
     * updated, e.g. by autosave.
     *
     * @since 2.5.0
     * @since 6.1.0 Added `$action` argument.
     *
     * @param string|int $action Optional. The nonce action. Default -1.
     * @return float Float value rounded up to the next highest integer.
     */
    public function wpNonceTick(string|int $action): float;
}
