<?php

namespace WpService\Contracts;

interface IsCommentFeed
{
    /**
 * Is the query for a comments feed?
 *
 * @since 3.0.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool Whether the query is for a comments feed.
 */
    public function isCommentFeed(): bool;
}
