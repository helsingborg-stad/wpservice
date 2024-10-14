<?php

namespace WpService\Contracts;

interface IsPostTypeHierarchical
{
/**
 * Determines whether the post type is hierarchical.
 *
 * A false return value might also mean that the post type does not exist.
 *
 * @since 3.0.0
 *
 * @see get_post_type_object()
 *
 * @param string $postType Post type name
 * @return bool Whether post type is hierarchical.
 */
    public function isPostTypeHierarchical(string $postType): bool;
}
