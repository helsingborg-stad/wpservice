<?php

namespace WpService\Contracts;

interface GetNextPostsLink
{
    /**
 * Retrieves the next posts page link.
 *
 * @since 2.7.0
 *
 * @global int      $paged
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string $label    Content for link text.
 * @param int $maxPage Optional. Max pages. Default 0.
 * @return string|void HTML-formatted next posts page link.
 */
    public function getNextPostsLink(string $label = null, int $maxPage = 0): mixed;
}
