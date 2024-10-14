<?php

namespace WpService\Contracts;

interface Absint
{
/**
 * Converts a value to non-negative integer.
 *
 * @since 2.5.0
 *
 * @param mixed $maybeint Data you wish to have converted to a non-negative integer.
 * @return int A non-negative integer.
 */
    public function absint(mixed $maybeint): int;
}
