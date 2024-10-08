<?php

namespace WpService\Contracts;

interface WpOpcacheInvalidate
{
    /**
     * Attempts to clear the opcode cache for an individual PHP file.
     *
     * This function can be called safely without having to check the file extension
     * or availability of the OPcache extension.
     *
     * Whether or not invalidation is possible is cached to improve performance.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/function.opcache-invalidate.php
     *
     * @param string $filepath Path to the file, including extension, for which the opcode cache is to be cleared.
     * @param bool $force    Invalidate even if the modification time is not newer than the file in cache.
     *                         Default false.
     * @return bool True if opcache was invalidated for `$filepath`, or there was nothing to invalidate.
     *              False if opcache invalidation is not available, or is disabled via filter.
     */
    public function wpOpcacheInvalidate(string $filepath, bool $force = false): bool;
}
