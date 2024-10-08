<?php

namespace WpService\Contracts;

interface WpIsWritable
{
    /**
     * Determines if a directory is writable.
     *
     * This function is used to work around certain ACL issues in PHP primarily
     * affecting Windows Servers.
     *
     * @since 3.6.0
     *
     * @see win_is_writable()
     *
     * @param string $path Path to check for write-ability.
     * @return bool Whether the path is writable.
     */
    public function wpIsWritable(string $path): bool;
}
