<?php

namespace WpService\Contracts;

interface WpCacheAddGlobalGroups
{
/**
 * Adds a group or set of groups to the list of global groups.
 *
 * @since 2.6.0
 *
 * @see WP_Object_Cache::add_global_groups()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param string|string[] $groups A group or an array of groups to add.
 */
    public function wpCacheAddGlobalGroups(string|array $groups): void;
}
