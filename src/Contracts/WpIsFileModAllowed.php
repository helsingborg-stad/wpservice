<?php

namespace WpService\Contracts;

interface WpIsFileModAllowed
{
    /**
 * Determines whether file modifications are allowed.
 *
 * @since 4.8.0
 *
 * @param string $context The usage context.
 * @return bool True if file modification is allowed, false otherwise.
 */
    public function wpIsFileModAllowed(string $context): bool;
}
