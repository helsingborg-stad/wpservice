<?php

namespace WpService\Contracts;

interface WpIsStream
{
    /**
 * Tests if a given path is a stream URL
 *
 * @since 3.5.0
 *
 * @param string $path The resource path or URL.
 * @return bool True if the path is a stream URL.
 */
    public function wpIsStream(string $path): bool;
}
