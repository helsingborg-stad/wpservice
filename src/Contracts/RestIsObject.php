<?php

namespace WpService\Contracts;

interface RestIsObject
{
    /**
 * Determines if a given value is object-like.
 *
 * @since 5.5.0
 *
 * @param mixed $maybeObject The value being evaluated.
 * @return bool True if object like, otherwise false.
 */
    public function restIsObject(mixed $maybeObject): bool;
}
