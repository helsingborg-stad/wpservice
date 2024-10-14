<?php

namespace WpService\Contracts;

interface GetPostClass
{
/**
 * Retrieves an array of the class names for the post container element.
 *
 * The class names are many:
 *
 *  - If the post has a post thumbnail, `has-post-thumbnail` is added as a class.
 *  - If the post is sticky, then the `sticky` class name is added.
 *  - The class `hentry` is always added to each post.
 *  - For each taxonomy that the post belongs to, a class will be added of the format
 *    `{$taxonomy}-{$slug}`, e.g. `category-foo` or `my_custom_taxonomy-bar`.
 *    The `post_tag` taxonomy is a special case; the class has the `tag-` prefix
 *    instead of `post_tag-`.
 *
 * All class names are passed through the filter, {@see 'post_class'}, followed by
 * `$css_class` parameter value, with the post ID as the last parameter.
 *
 * @since 2.7.0
 * @since 4.2.0 Custom taxonomy class names were added.
 *
 * @param string|string[] $cssClass Optional. Space-separated string or array of class names
 *                                   to add to the class list. Default empty.
 * @param int|\WP_Post $post      Optional. Post ID or post object.
 * @return string[] Array of class names.
 */
    public function getPostClass(string|array $cssClass = '', int|\WP_Post $post = null): array;
}
