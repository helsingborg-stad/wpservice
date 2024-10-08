<?php

namespace WpService\Contracts;

interface RestAreValuesEqual
{
    /**
 * Checks the equality of two values, following JSON Schema semantics.
 *
 * Property order is ignored for objects.
 *
 * Values must have been previously sanitized/coerced to their native types.
 *
 * @since 5.7.0
 *
 * @param mixed $value1 The first value to check.
 * @param mixed $value2 The second value to check.
 * @return bool True if the values are equal or false otherwise.
 */
    public function restAreValuesEqual(mixed $value1, mixed $value2): bool;
}
