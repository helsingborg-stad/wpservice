<?php

namespace WpService\Contracts;

interface RewindPosts
{
    /**
     * Rewind the loop posts.
     *
     * @since 1.5.0
     *
     * @global WP_Query $wp_query WordPress Query object.
     */
    public function rewindPosts(): void;
}
