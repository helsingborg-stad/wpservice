<?php

namespace WpService\Contracts;

interface CommentExists
{
    /**
 * Determines if a comment exists based on author and date.
 *
 * For best performance, use `$timezone = 'gmt'`, which queries a field that is properly indexed. The default value
 * for `$timezone` is 'blog' for legacy reasons.
 *
 * @since 2.0.0
 * @since 4.4.0 Added the `$timezone` parameter.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $commentAuthor Author of the comment.
 * @param string $commentDate   Date of the comment.
 * @param string $timezone       Timezone. Accepts 'blog' or 'gmt'. Default 'blog'.
 * @return string|null Comment post ID on success.
 */
    public function commentExists(string $commentAuthor, string $commentDate, string $timezone): string|null;
}
