<?php

namespace WpService\Contracts;

interface WpSetPostTags
{
/**
 * Sets the tags for a post.
 *
 * @since 2.3.0
 *
 * @see wp_set_object_terms()
 *
 * @param int $postId Optional. The Post ID. Does not default to the ID of the global $post.
 * @param string|array $tags    Optional. An array of tags to set for the post, or a string of tags
 *                              separated by commas. Default empty.
 * @param bool $append  Optional. If true, don't delete existing tags, just add on. If false,
 *                              replace the tags with the new tags. Default false.
 * @return array|false|\WP_Error Array of term taxonomy IDs of affected terms. WP_Error or false on failure.
 */
    public function wpSetPostTags(int $postId = 0, string|array $tags = '', bool $append = false): array|false|\WP_Error;
}
