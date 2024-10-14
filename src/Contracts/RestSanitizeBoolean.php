<?php

namespace WpService\Contracts;

interface RestSanitizeBoolean
{
/**
 * Changes a boolean-like value into the proper boolean value.
 *
 * @since 4.7.0
 *
 * @param bool|string|int $value The value being evaluated.
 * @return bool Returns the proper associated boolean value.
 */
    public function restSanitizeBoolean(bool|string|int $value): bool;
}
