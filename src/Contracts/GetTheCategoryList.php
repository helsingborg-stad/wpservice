<?php

namespace WpService\Contracts;

interface GetTheCategoryList
{
    /**
     * Retrieves category list for a post in either HTML list or custom format.
     *
     * Generally used for quick, delimited (e.g. comma-separated) lists of categories,
     * as part of a post entry meta.
     *
     * For a more powerful, list-based function, see wp_list_categories().
     *
     * @since 1.5.1
     *
     * @see wp_list_categories()
     *
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     *
     * @param string $separator Optional. Separator between the categories. By default, the links are placed
     *                          in an unordered list. An empty string will result in the default behavior.
     * @param string $parents   Optional. How to display the parents. Accepts 'multiple', 'single', or empty.
     *                          Default empty string.
     * @param int $postId   Optional. ID of the post to retrieve categories for. Defaults to the current post.
     * @return string Category list for a post.
     */
    public function getTheCategoryList(string $separator = '', string $parents = '', int|false $postId = false): string;
}
