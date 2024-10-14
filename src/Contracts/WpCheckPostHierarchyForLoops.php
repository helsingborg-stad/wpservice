<?php

namespace WpService\Contracts;

interface WpCheckPostHierarchyForLoops
{
/**
 * Checks the given subset of the post hierarchy for hierarchy loops.
 *
 * Prevents loops from forming and breaks those that it finds. Attached
 * to the {@see 'wp_insert_post_parent'} filter.
 *
 * @since 3.1.0
 *
 * @see wp_find_hierarchy_loop()
 *
 * @param int $postParent ID of the parent for the post we're checking.
 * @param int $postId     ID of the post we're checking.
 * @return int The new post_parent for the post, 0 otherwise.
 */
    public function wpCheckPostHierarchyForLoops(int $postParent, int $postId): int;
}
