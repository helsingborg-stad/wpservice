<?php

namespace WpService\Contracts;

interface GetLastcommentmodified
{
/**
 * Retrieves the date the last comment was modified.
 *
 * @since 1.5.0
 * @since 4.7.0 Replaced caching the modified date in a local static variable
 *              with the Object Cache API.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $timezone Which timezone to use in reference to 'gmt', 'blog', or 'server' locations.
 * @return string|false Last comment modified date on success, false on failure.
 */
    public function getLastcommentmodified(string $timezone = 'server'): string|false;
}
