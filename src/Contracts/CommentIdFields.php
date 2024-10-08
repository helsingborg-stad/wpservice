<?php

namespace WpService\Contracts;

interface CommentIdFields
{
    /**
 * Outputs hidden input HTML for replying to comments.
 *
 * Adds two hidden inputs to the comment form to identify the `comment_post_ID`
 * and `comment_parent` values for threaded comments.
 *
 * This tag must be within the `<form>` section of the `comments.php` template.
 *
 * @since 2.7.0
 * @since 6.2.0 Renamed `$post_id` to `$post` and added WP_Post support.
 *
 * @see get_comment_id_fields()
 *
 * @param int|\WP_Post|null $post Optional. The post the comment is being displayed for.
 *                               Defaults to the current global post.
 */
    public function commentIdFields(int|\WP_Post|null $post): void;
}
