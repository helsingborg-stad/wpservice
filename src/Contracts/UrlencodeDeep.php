<?php

namespace WpService\Contracts;

interface UrlencodeDeep
{
    /**
     * Navigates through an array, object, or scalar, and encodes the values to be used in a URL.
     *
     * @since 2.2.0
     *
     * @param mixed $value The array or string to be encoded.
     * @return mixed The encoded value.
     */
    public function urlencodeDeep(mixed $value): mixed;
}
