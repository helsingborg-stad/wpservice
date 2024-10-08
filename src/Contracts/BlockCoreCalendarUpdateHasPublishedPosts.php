<?php

namespace WpService\Contracts;

interface BlockCoreCalendarUpdateHasPublishedPosts
{
    /**
     * Queries the database for any published post and saves
     * a flag whether any published post exists or not.
     *
     * @since 5.9.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return bool Has any published posts or not.
     */
    public function blockCoreCalendarUpdateHasPublishedPosts(): bool;
}
