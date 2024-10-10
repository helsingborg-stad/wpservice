<?php

namespace WpService\Contracts;

interface WpLatestCommentsDraftOrPostTitle
{
    /**
     * Get the post title.
     *
     * The post title is fetched and if it is blank then a default string is
     * returned.
     *
     * Copied from `wp-admin/includes/template.php`, but we can't include that
     * file because:
     *
     * 1. It causes bugs with test fixture generation and strange Docker 255 error
     *    codes.
     * 2. It's in the admin; ideally we *shouldn't* be including files from the
     *    admin for a block's output. It's a very small/simple function as well,
     *    so duplicating it isn't too terrible.
     *
     * @since 3.3.0
     *
     * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
     * @return string The post title if set; "(no title)" if no title is set.
     */
    public function wpLatestCommentsDraftOrPostTitle(int|\WP_Post $post): string;
}
