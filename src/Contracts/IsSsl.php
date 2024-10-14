<?php

namespace WpService\Contracts;

interface IsSsl
{
/**
 * Determines if SSL is used.
 *
 * @since 2.6.0
 * @since 4.6.0 Moved from functions.php to load.php.
 *
 * @return bool True if SSL, otherwise false.
 */
    public function isSsl(): bool;
}
