<?php

namespace WpService\Contracts;

interface GetAuthorPostsUrl
{
/**
 * Retrieves the URL to the author page for the user with the ID provided.
 *
 * @since 2.1.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param int $authorId       Author ID.
 * @param string $authorNicename Optional. The author's nicename (slug). Default empty.
 * @return string The URL to the author's page.
 */
    public function getAuthorPostsUrl(int $authorId, string $authorNicename = ''): string;
}
