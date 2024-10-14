<?php

namespace WpService\Contracts;

interface WpEditPostsQuery
{
/**
 * Runs the query to fetch the posts for listing on the edit posts page.
 *
 * @since 2.5.0
 *
 * @param array|false $q Optional. Array of query variables to use to build the query.
 *                       Defaults to the `$_GET` superglobal.
 * @return array
 */
    public function wpEditPostsQuery(array|false $q = false): array;
}
