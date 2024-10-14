<?php

namespace WpService\Contracts;

interface MaybeSerialize
{
/**
 * Serializes data, if needed.
 *
 * @since 2.0.5
 *
 * @param string|array|object $data Data that might be serialized.
 * @return mixed A scalar data.
 */
    public function maybeSerialize(string|array|object $data): mixed;
}
