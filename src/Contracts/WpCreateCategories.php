<?php

namespace WpService\Contracts;

interface WpCreateCategories
{
    /**
 * Creates categories for the given post.
 *
 * @since 2.0.0
 *
 * @param string[] $categories Array of category names to create.
 * @param int $postId    Optional. The post ID. Default empty.
 * @return int[] Array of IDs of categories assigned to the given post.
 */
    public function wpCreateCategories(array $categories, int|string $postId = ''): array;
}
