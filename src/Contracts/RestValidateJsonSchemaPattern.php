<?php

namespace WpService\Contracts;

interface RestValidateJsonSchemaPattern
{
    /**
 * Validates if the JSON Schema pattern matches a value.
 *
 * @since 5.6.0
 *
 * @param string $pattern The pattern to match against.
 * @param string $value   The value to check.
 * @return bool           True if the pattern matches the given value, false otherwise.
 */
    public function restValidateJsonSchemaPattern(string $pattern, string $value): bool;
}