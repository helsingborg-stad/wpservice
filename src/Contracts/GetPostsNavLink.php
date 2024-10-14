<?php

namespace WpService\Contracts;

interface GetPostsNavLink
{
/**
 * Retrieves the post pages link navigation for previous and next pages.
 *
 * @since 2.8.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string|array $args {
 *     Optional. Arguments to build the post pages link navigation.
 *
 * @type string $sep      Separator character. Default '&#8212;'.
 * @type string $prelabel Link text to display for the previous page link.
 *                            Default '&laquo; Previous Page'.
 * @type string $nxtlabel Link text to display for the next page link.
 *                            Default 'Next Page &raquo;'.
 * }
 * @return string The posts link navigation.
 */
    public function getPostsNavLink(string|array $args = []): string;
}
