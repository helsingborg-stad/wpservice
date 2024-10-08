<?php

namespace WpService\Contracts;

interface HavePosts
{
    /**
     * Determines whether current WordPress query has posts to loop over.
     *
     * @since 1.5.0
     *
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @return bool True if posts are available, false if end of the loop.
     */
    public function havePosts(): bool;
}
