<?php

namespace WpService\Contracts;

interface PaginateCommentsLinks
{
    /**
 * Displays or retrieves pagination links for the comments on the current post.
 *
 * @see paginate_links()
 * @since 2.7.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string|array $args Optional args. See paginate_links(). Default empty array.
 * @return void|string|array Void if 'echo' argument is true and 'type' is not an array,
 *                           or if the query is not for an existing single post of any post type.
 *                           Otherwise, markup for comment page links or array of comment page links,
 *                           depending on 'type' argument.
 */
    public function paginateCommentsLinks(string|array $args): string|array;
}
