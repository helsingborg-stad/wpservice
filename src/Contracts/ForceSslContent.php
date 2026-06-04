<?php

namespace WpService\Contracts;

interface ForceSslContent
{
/**
 * Determines whether to force SSL on content.
 *
 * @since 2.8.5
 *
 * @param bool|null $force Optional. Whether to force SSL in admin screens. Default null.
 * @return bool True if forced, false if not forced.
 */
    public function forceSslContent(bool|null $force = null): bool;
}
