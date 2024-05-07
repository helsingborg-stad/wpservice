<?php

namespace WpService\Contracts;

use WP_Post;

interface GetEditPostLink
{
    /**
     * Retrieves the edit post link for post.
     *
     * Can be used within the WordPress loop or outside of it. Can be used with
     * pages, posts, attachments, revisions, global styles, templates, and template parts.
     *
     * @param int|WP_Post $post    Optional. Post ID or post object. Default is the global `$post`.
     * @param string      $context Optional. How to output the '&' character. Default '&amp;'.
     * @return string|null The edit post link for the given post. Null if the post type does not exist
     *                     or does not allow an editing UI.
     */
    public function getEditPostLink(int|WP_Post $post, string $context = 'display'): string | null;
}
