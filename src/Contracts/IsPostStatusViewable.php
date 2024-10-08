<?php

namespace WpService\Contracts;

interface IsPostStatusViewable
{
    /**
 * Determines whether a post status is considered "viewable".
 *
 * For built-in post statuses such as publish and private, the 'public' value will be evaluated.
 * For all others, the 'publicly_queryable' value will be used.
 *
 * @since 5.7.0
 * @since 5.9.0 Added `is_post_status_viewable` hook to filter the result.
 *
 * @param string|\stdClass $postStatus Post status name or object.
 * @return bool Whether the post status should be considered viewable.
 */
    public function isPostStatusViewable(string|\stdClass $postStatus): bool;
}
