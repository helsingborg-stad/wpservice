<?php

namespace WpService\Contracts;

interface GetPostsByAuthorSql
{
    /**
 * Retrieves the post SQL based on capability, author, and type.
 *
 * @since 3.0.0
 * @since 4.3.0 Introduced the ability to pass an array of post types to `$post_type`.
 *
 * @see get_private_posts_cap_sql()
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string|string[] $postType   Single post type or an array of post types.
 * @param bool $full        Optional. Returns a full WHERE statement instead of just
 *                                     an 'andalso' term. Default true.
 * @param int $postAuthor Optional. Query posts having a single author ID. Default null.
 * @param bool $publicOnly Optional. Only return public posts. Skips cap checks for
 *                                     $current_user.  Default false.
 * @return string SQL WHERE code that can be added to a query.
 */
    public function getPostsByAuthorSql(string|array $postType, bool $full = true, int $postAuthor = null, bool $publicOnly = false): string;
}
