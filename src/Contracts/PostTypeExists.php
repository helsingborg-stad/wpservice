<?php

namespace WpService\Contracts;

interface PostTypeExists
{
    /**
 * Determines whether a post type is registered.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 3.0.0
 *
 * @see get_post_type_object()
 *
 * @param string $postType Post type name.
 * @return bool Whether post type is registered.
 */
    public function postTypeExists(string $postType): bool;
}
