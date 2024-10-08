<?php

namespace WpService\Contracts;

interface PathIsAbsolute
{
    /**
 * Tests if a given filesystem path is absolute.
 *
 * For example, '/foo/bar', or 'c:\windows'.
 *
 * @since 2.5.0
 *
 * @param string $path File path.
 * @return bool True if path is absolute, false is not absolute.
 */
    public function pathIsAbsolute(string $path): bool;
}
