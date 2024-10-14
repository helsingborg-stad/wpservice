<?php

namespace WpService\Contracts;

interface GetPrivatePostsCapSql
{
/**
 * Retrieves the private post SQL based on capability.
 *
 * This function provides a standardized way to appropriately select on the
 * post_status of a post type. The function will return a piece of SQL code
 * that can be added to a WHERE clause; this SQL is constructed to allow all
 * published posts, and all private posts to which the user has access.
 *
 * @since 2.2.0
 * @since 4.3.0 Added the ability to pass an array to `$post_type`.
 *
 * @param string|array $postType Single post type or an array of post types. Currently only supports 'post' or 'page'.
 * @return string SQL code that can be added to a where clause.
 */
    public function getPrivatePostsCapSql(string|array $postType): string;
}
