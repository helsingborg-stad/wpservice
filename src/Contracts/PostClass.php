<?php

namespace WpService\Contracts;

interface PostClass
{
/**
 * Displays the classes for the post container element.
 *
 * @since 2.7.0
 *
 * @param string|string[] $cssClass Optional. One or more classes to add to the class list.
 *                                   Default empty.
 * @param int|\WP_Post $post      Optional. Post ID or post object. Defaults to the global `$post`.
 */
    public function postClass(string|array $cssClass = '', int|\WP_Post $post = null): void;
}
