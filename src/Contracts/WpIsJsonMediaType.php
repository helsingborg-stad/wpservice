<?php

namespace WpService\Contracts;

interface WpIsJsonMediaType
{
    /**
 * Checks whether a string is a valid JSON Media Type.
 *
 * @since 5.6.0
 *
 * @param string $mediaType A Media Type string to check.
 * @return bool True if string is a valid JSON Media Type.
 */
    public function wpIsJsonMediaType(string $mediaType): bool;
}