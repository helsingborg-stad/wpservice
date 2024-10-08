<?php

namespace WpService\Contracts;

interface WpCleanPluginsCache
{
    /**
     * Clears the plugins cache used by get_plugins() and by default, the plugin updates cache.
     *
     * @since 3.7.0
     *
     * @param bool $clearUpdateCache Whether to clear the plugin updates cache. Default true.
     */
    public function wpCleanPluginsCache(bool $clearUpdateCache = true): void;
}
