<?php

namespace WpService\Contracts;

interface WpResetPostdata
{
    /**
     * After looping through a separate query, this function restores
     * the $post global to the current post in the main query.
     *
     * @since 3.0.0
     *
     * @global WP_Query $wp_query WordPress Query object.
     */
    public function wpResetPostdata(): void;
}
