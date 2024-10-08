<?php

namespace WpService\Contracts;

interface GetSearchLink
{
    /**
 * Retrieves the permalink for a search.
 *
 * @since 3.0.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $query Optional. The query string to use. If empty the current query is used. Default empty.
 * @return string The search permalink.
 */
    public function getSearchLink(string $query = ''): string;
}
