<?php

namespace WpService\Contracts;

interface GetPostTypeArchiveLink
{
    /**
 * Retrieves the permalink for a post type archive.
 *
 * @since 3.1.0
 * @since 4.5.0 Support for posts was added.
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $postType Post type.
 * @return string|false The post type archive permalink. False if the post type
 *                      does not exist or does not have an archive.
 */
    public function getPostTypeArchiveLink(string $postType): string|false;
}
