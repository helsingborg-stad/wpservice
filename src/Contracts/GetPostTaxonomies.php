<?php

namespace WpService\Contracts;

interface GetPostTaxonomies
{
/**
 * Retrieves all taxonomy names for the given post.
 *
 * @since 2.5.0
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return string[] An array of all taxonomy names for the given post.
 */
    public function getPostTaxonomies(int|\WP_Post $post = 0): array;
}
