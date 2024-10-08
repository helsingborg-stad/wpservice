<?php

namespace WpService\Contracts;

interface WpLoadAlloptions
{
    /**
 * Loads and caches all autoloaded options, if available or all options.
 *
 * @since 2.2.0
 * @since 5.3.1 The `$force_cache` parameter was added.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param bool $forceCache Optional. Whether to force an update of the local cache
 *                          from the persistent cache. Default false.
 * @return array List of all options.
 */
    public function wpLoadAlloptions(bool $forceCache): array;
}
