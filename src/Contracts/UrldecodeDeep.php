<?php

namespace WpService\Contracts;

interface UrldecodeDeep
{
    /**
     * Navigates through an array, object, or scalar, and decodes URL-encoded values
     *
     * @since 4.4.0
     *
     * @param mixed $value The array or string to be decoded.
     * @return mixed The decoded value.
     */
    public function urldecodeDeep(mixed $value): mixed;
}
