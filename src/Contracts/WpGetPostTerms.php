<?php

namespace WpService\Contracts;

interface WpGetPostTerms
{
    /**
 * Retrieves the terms for a post.
 *
 * @since 2.8.0
 *
 * @param int $postId  Optional. The Post ID. Does not default to the ID of the
 *                                  global $post. Default 0.
 * @param string|string[] $taxonomy Optional. The taxonomy slug or array of slugs for which
 *                                  to retrieve terms. Default 'post_tag'.
 * @param array $args     {
 *     Optional. Term query parameters. See WP_Term_Query::__construct() for supported arguments.
 *
 *     @type string $fields Term fields to retrieve. Default 'all'.
 * }
 * @return array|\WP_Error Array of WP_Term objects on success or empty array if no terms were found.
 *                        WP_Error object if `$taxonomy` doesn't exist.
 */
    public function wpGetPostTerms(int $postId = 0, string|array $taxonomy = 'post_tag', array $args = []): array|\WP_Error;
}
