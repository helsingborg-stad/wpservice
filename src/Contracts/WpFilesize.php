<?php

namespace WpService\Contracts;

interface WpFilesize
{
    /**
 * Wrapper for PHP filesize with filters and casting the result as an integer.
 *
 * @since 6.0.0
 *
 * @link https://www.php.net/manual/en/function.filesize.php
 *
 * @param string $path Path to the file.
 * @return int The size of the file in bytes, or 0 in the event of an error.
 */
    public function wpFilesize(string $path): int;
}
