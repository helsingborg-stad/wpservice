<?php

namespace WpService\Contracts;

interface WpGetPostCategories
{
    /**
     * Retrieves the list of categories for a post.
     *
     * Compatibility layer for themes and plugins. Also an easy layer of abstraction
     * away from the complexity of the taxonomy layer.
     *
     * @since 2.1.0
     *
     * @see wp_get_object_terms()
     *
     * @param int $postId Optional. The Post ID. Does not default to the ID of the
     *                       global $post. Default 0.
     * @param array $args    Optional. Category query parameters. Default empty array.
     *                       See WP_Term_Query::__construct() for supported arguments.
     * @return array|\WP_Error List of categories. If the `$fields` argument passed via `$args` is 'all' or
     *                        'all_with_object_id', an array of WP_Term objects will be returned. If `$fields`
     *                        is 'ids', an array of category IDs. If `$fields` is 'names', an array of category names.
     *                        WP_Error object if 'category' taxonomy doesn't exist.
     */
    public function wpGetPostCategories(int $postId = 0, array $args = []): array|\WP_Error;
}
