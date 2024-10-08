<?php

namespace WpService\Contracts;

interface IsMultisite
{
    /**
 * Determines whether Multisite is enabled.
 *
 * @since 3.0.0
 *
 * @return bool True if Multisite is enabled, false otherwise.
 */
    public function isMultisite(): bool;
}
