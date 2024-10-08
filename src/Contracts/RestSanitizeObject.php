<?php

namespace WpService\Contracts;

interface RestSanitizeObject
{
    /**
 * Converts an object-like value to an array.
 *
 * @since 5.5.0
 *
 * @param mixed $maybeObject The value being evaluated.
 * @return array Returns the object extracted from the value as an associative array.
 */
    public function restSanitizeObject(mixed $maybeObject): array;
}
