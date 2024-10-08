<?php

namespace WpService\Contracts;

interface MaybeUnserialize
{
    /**
 * Unserializes data only if it was serialized.
 *
 * @since 2.0.0
 *
 * @param string $data Data that might be unserialized.
 * @return mixed Unserialized data can be any type.
 */
    public function maybeUnserialize(string $data): mixed;
}
