<?php

namespace WpService\Contracts;

interface RestGetBestTypeForValue
{
/**
 * Gets the best type for a value.
 *
 * @since 5.5.0
 *
 * @param mixed $value The value to check.
 * @param string[] $types The list of possible types.
 * @return string The best matching type, an empty string if no types match.
 */
    public function restGetBestTypeForValue(mixed $value, array $types): string;
}
