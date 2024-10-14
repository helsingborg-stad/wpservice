<?php

namespace WpService\Contracts;

interface HaveComments
{
/**
 * Determines whether current WordPress query has comments to loop over.
 *
 * @since 2.2.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool True if comments are available, false if no more comments.
 */
    public function haveComments(): bool;
}
