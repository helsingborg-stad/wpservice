<?php

namespace WpService\Contracts;

interface ThePost
{
    /**
 * Iterate the post index in the loop.
 *
 * @since 1.5.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 */
    public function thePost(): void;
}
