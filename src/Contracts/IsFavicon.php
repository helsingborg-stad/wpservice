<?php

namespace WpService\Contracts;

interface IsFavicon
{
/**
 * Is the query for the favicon.ico file?
 *
 * @since 5.4.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool Whether the query is for the favicon.ico file.
 */
    public function isFavicon(): bool;
}
