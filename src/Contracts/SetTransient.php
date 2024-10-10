<?php

namespace WpService\Contracts;

interface SetTransient
{
    /**
     * Sets/updates the value of a transient.
     *
     * You do not need to serialize values. If the value needs to be serialized,
     * then it will be serialized before it is set.
     *
     * @since 2.8.0
     *
     * @param string $transient  Transient name. Expected to not be SQL-escaped.
     *                           Must be 172 characters or fewer in length.
     * @param mixed $value      Transient value. Must be serializable if non-scalar.
     *                           Expected to not be SQL-escaped.
     * @param int $expiration Optional. Time until expiration in seconds. Default 0 (no expiration).
     * @return bool True if the value was set, false otherwise.
     */
    public function setTransient(string $transient, mixed $value, int $expiration): bool;
}
