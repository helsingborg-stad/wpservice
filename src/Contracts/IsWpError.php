<?php

namespace WpService\Contracts;

interface IsWpError
{
/**
 * Checks whether the given variable is a WordPress Error.
 *
 * Returns whether `$thing` is an instance of the `WP_Error` class.
 *
 * @since 2.1.0
 *
 * @param mixed $thing The variable to check.
 * @return bool Whether the variable is an instance of WP_Error.
 */
    public function isWpError(mixed $thing): bool;
}
