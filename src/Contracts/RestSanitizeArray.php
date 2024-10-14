<?php

namespace WpService\Contracts;

interface RestSanitizeArray
{
/**
 * Converts an array-like value to an array.
 *
 * @since 5.5.0
 *
 * @param mixed $maybeArray The value being evaluated.
 * @return array Returns the array extracted from the value.
 */
    public function restSanitizeArray(mixed $maybeArray): array;
}
