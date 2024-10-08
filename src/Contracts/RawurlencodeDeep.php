<?php

namespace WpService\Contracts;

interface RawurlencodeDeep
{
    /**
     * Navigates through an array, object, or scalar, and raw-encodes the values to be used in a URL.
     *
     * @since 3.4.0
     *
     * @param mixed $value The array or string to be encoded.
     * @return mixed The encoded value.
     */
    public function rawurlencodeDeep(mixed $value): mixed;
}
