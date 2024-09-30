<?php

namespace WpService\Contracts;

interface SetTransient
{
    /**
     * Sets/updates the value of a transient.
     *
     * @see https://developer.wordpress.org/reference/functions/set_transient/
     *
     * @param string $transient     Transient name. Expected to not be SQL-escaped.
     *                              Must be 172 characters or fewer in length.
     * @param mixed  $value         Transient value. Transient value.
     *                              Must be serializable if non-scalar. Expected to not be SQL-escaped.
     * @param int    $expiration    Time until expiration in seconds. Default 0 (no expiration).
     */
    public function setTransient(string $transient, mixed $value, int $expiration): bool;
}
