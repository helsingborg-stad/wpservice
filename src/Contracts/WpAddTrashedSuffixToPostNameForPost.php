<?php

namespace WpService\Contracts;

interface WpAddTrashedSuffixToPostNameForPost
{
    /**
 * Adds a trashed suffix for a given post.
 *
 * Store its desired (i.e. current) slug so it can try to reclaim it
 * if the post is untrashed.
 *
 * For internal use.
 *
 * @since 4.5.0
 * @access private
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param \WP_Post $post The post.
 * @return string New slug for the post.
 */
    public function wpAddTrashedSuffixToPostNameForPost(\WP_Post $post): string;
}
