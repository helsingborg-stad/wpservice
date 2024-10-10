<?php

namespace WpService\Contracts;

interface Utf8UriEncode
{
    /**
     * Encodes the Unicode values to be used in the URI.
     *
     * @since 1.5.0
     * @since 5.8.3 Added the `encode_ascii_characters` parameter.
     *
     * @param string $utf8String             String to encode.
     * @param int $length                  Max length of the string
     * @param bool $encodeAsciiCharacters Whether to encode ascii characters such as < " '
     * @return string String with Unicode encoded for URI.
     */
    public function utf8UriEncode(string $utf8String, int $length, bool $encodeAsciiCharacters = false): string;
}
