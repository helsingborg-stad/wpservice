<?php

namespace WpService\Contracts;

interface Trailingslashit
{
    /**
     * Appends a trailing slash.
     *
     * Will remove trailing forward and backslashes if it exists already before adding
     * a trailing forward slash. This prevents double slashing a string or path.
     *
     * The primary use of this is for paths and thus should be used for paths. It is
     * not restricted to paths and offers no specific path support.
     *
     * @since 1.2.0
     *
     * @param string $value Value to which trailing slash will be added.
     * @return string String with trailing slash added.
     */
    public function trailingslashit(string $value): string;
}
