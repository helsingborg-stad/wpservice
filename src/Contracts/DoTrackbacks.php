<?php

namespace WpService\Contracts;

interface DoTrackbacks
{
    /**
     * Performs trackbacks.
     *
     * @since 1.5.0
     * @since 4.7.0 `$post` can be a WP_Post object.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int|\WP_Post $post Post ID or object to do trackbacks on.
     * @return void|false Returns false on failure.
     */
    public function doTrackbacks(int|\WP_Post $post): mixed;
}
