<?php

namespace WpService\Contracts;

interface WpGetRevisionUiDiff
{
    /**
 * Get the revision UI diff.
 *
 * @since 3.6.0
 *
 * @param \WP_Post|int $post         The post object or post ID.
 * @param int $compareFrom The revision ID to compare from.
 * @param int $compareTo   The revision ID to come to.
 * @return array|false Associative array of a post's revisioned fields and their diffs.
 *                     Or, false on failure.
 */
    public function wpGetRevisionUiDiff(\WP_Post|int $post, int $compareFrom, int $compareTo): array|false;
}
