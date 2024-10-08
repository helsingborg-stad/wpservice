<?php

namespace WpService\Contracts;

interface Wp
{
    /**
     * Sets up the WordPress query.
     *
     * @since 2.0.0
     *
     * @global WP       $wp           Current WordPress environment instance.
     * @global WP_Query $wp_query     WordPress Query object.
     * @global WP_Query $wp_the_query Copy of the WordPress Query object.
     *
     * @param string|array $queryVars Default WP_Query arguments.
     */
    public function wp(string|array $queryVars = ''): void;
}
