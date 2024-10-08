<?php

namespace WpService\Contracts;

interface IsEmbed
{
    /**
 * Is the query for an embedded post?
 *
 * @since 4.4.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool Whether the query is for an embedded post.
 */
    public function isEmbed(): bool;
}
