<?php

namespace WpService\Contracts;

interface ForceSslAdmin
{
    /**
 * Determines whether to force SSL used for the Administration Screens.
 *
 * @since 2.6.0
 *
 * @param string|bool $force Optional. Whether to force SSL in admin screens. Default null.
 * @return bool True if forced, false if not forced.
 */
    public function forceSslAdmin(string|bool $force = null): bool;
}
