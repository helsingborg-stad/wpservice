<?php

namespace WpService\Contracts;

interface TheCategory
{
/**
 * Displays category list for a post in either HTML list or custom format.
 *
 * @since 0.71
 *
 * @param string $separator Optional. Separator between the categories. By default, the links are placed
 *                          in an unordered list. An empty string will result in the default behavior.
 * @param string $parents   Optional. How to display the parents. Accepts 'multiple', 'single', or empty.
 *                          Default empty string.
 * @param int $postId   Optional. ID of the post to retrieve categories for. Defaults to the current post.
 */
    public function theCategory(string $separator = '', string $parents = '', int|false $postId = false): void;
}
