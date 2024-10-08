<?php

namespace WpService\Contracts;

interface WpOpcacheInvalidateDirectory
{
    /**
 * Attempts to clear the opcode cache for a directory of files.
 *
 * @since 6.2.0
 *
 * @see wp_opcache_invalidate()
 * @link https://www.php.net/manual/en/function.opcache-invalidate.php
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 *
 * @param string $dir The path to the directory for which the opcode cache is to be cleared.
 */
    public function wpOpcacheInvalidateDirectory(string $dir): void;
}
