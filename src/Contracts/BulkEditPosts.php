<?php

namespace WpService\Contracts;

interface BulkEditPosts
{
    /**
 * Processes the post data for the bulk editing of posts.
 *
 * Updates all bulk edited posts/pages, adding (but not removing) tags and
 * categories. Skips pages when they would be their own parent or child.
 *
 * @since 2.7.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array|null $postData Optional. The array of post data to process.
 *                              Defaults to the `$_POST` superglobal.
 * @return array
 */
    public function bulkEditPosts(array|null $postData = null): array;
}
