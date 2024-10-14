<?php

namespace WpService\Contracts;

interface RestIsInteger
{
/**
 * Determines if a given value is integer-like.
 *
 * @since 5.5.0
 *
 * @param mixed $maybeInteger The value being evaluated.
 * @return bool True if an integer, otherwise false.
 */
    public function restIsInteger(mixed $maybeInteger): bool;
}
