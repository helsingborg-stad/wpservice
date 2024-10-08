<?php

namespace WpService\Contracts;

interface HasTag
{
    /**
     * Checks if the current post has any of given tags.
     *
     * The given tags are checked against the post's tags' term_ids, names and slugs.
     * Tags given as integers will only be checked against the post's tags' term_ids.
     *
     * If no tags are given, determines if post has any tags.
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 2.6.0
     * @since 2.7.0 Tags given as integers are only checked against
     *              the post's tags' term_ids, not names or slugs.
     * @since 2.7.0 Can be used outside of the WordPress Loop if `$post` is provided.
     *
     * @param string|int|array $tag  Optional. The tag name/term_id/slug,
     *                               or an array of them to check for. Default empty.
     * @param int|\WP_Post $post Optional. Post to check. Defaults to the current post.
     * @return bool True if the current post has any of the given tags
     *              (or any tag, if no tag specified). False otherwise.
     */
    public function hasTag(string|int|array $tag = '', int|\WP_Post $post = null): bool;
}
