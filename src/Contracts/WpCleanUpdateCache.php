<?php

namespace WpService\Contracts;

interface WpCleanUpdateCache
{
/**
 * Clears existing update caches for plugins, themes, and core.
 *
 * @since 4.1.0
 */
    public function wpCleanUpdateCache(): void;
}
