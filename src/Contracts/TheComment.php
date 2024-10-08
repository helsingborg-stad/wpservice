<?php

namespace WpService\Contracts;

interface TheComment
{
    /**
 * Iterate comment index in the comment loop.
 *
 * @since 2.2.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 */
    public function theComment(): void;
}
