<?php

namespace WpService\Contracts;

interface WpSetPostCategories
{
    /**
     * Sets categories for a post.
     *
     * If no categories are provided, the default category is used.
     *
     * @since 2.1.0
     *
     * @param int $postId         Optional. The Post ID. Does not default to the ID
     *                                   of the global $post. Default 0.
     * @param int[]|int $postCategories Optional. List of category IDs, or the ID of a single category.
     *                                   Default empty array.
     * @param bool $append          If true, don't delete existing categories, just add on.
     *                                   If false, replace the categories with the new categories.
     * @return array|false|\WP_Error Array of term taxonomy IDs of affected categories. WP_Error or false on failure.
     */
    public function wpSetPostCategories(int $postId, array|int $postCategories = [], bool $append = false): array|false|\WP_Error;
}
