<?php

namespace WpService\Contracts;

interface RestIsArray
{
    /**
 * Determines if a given value is array-like.
 *
 * @since 5.5.0
 *
 * @param mixed $maybeArray The value being evaluated.
 * @return bool
 */
    public function restIsArray(mixed $maybeArray): bool;
}
