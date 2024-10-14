<?php

namespace WpService\Contracts;

interface WpIsNumericArray
{
/**
 * Determines if the variable is a numeric-indexed array.
 *
 * @since 4.4.0
 *
 * @param mixed $data Variable to check.
 * @return bool Whether the variable is a list.
 */
    public function wpIsNumericArray(mixed $data): bool;
}
