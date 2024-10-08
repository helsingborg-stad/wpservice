<?php

namespace WpService\Contracts;

interface WpMkdirP
{
    /**
     * Recursive directory creation based on full path.
     *
     * Will attempt to set permissions on folders.
     *
     * @since 2.0.1
     *
     * @param string $target Full path to attempt to create.
     * @return bool Whether the path was created. True if path already exists.
     */
    public function wpMkdirP(string $target): bool;
}
