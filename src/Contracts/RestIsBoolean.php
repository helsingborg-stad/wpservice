<?php

namespace WpService\Contracts;

interface RestIsBoolean
{
    /**
 * Determines if a given value is boolean-like.
 *
 * @since 4.7.0
 *
 * @param bool|string $maybeBool The value being evaluated.
 * @return bool True if a boolean, otherwise false.
 */
    public function restIsBoolean(bool|string $maybeBool): bool;
}
