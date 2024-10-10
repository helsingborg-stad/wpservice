<?php

namespace WpService\Contracts;

interface WpGetPostRevision
{
    /**
     * Gets a post revision.
     *
     * @since 2.6.0
     *
     * @param int|\WP_Post $post   Post ID or post object.
     * @param string $output Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
     *                            correspond to a WP_Post object, an associative array, or a numeric array,
     *                            respectively. Default OBJECT.
     * @param string $filter Optional sanitization filter. See sanitize_post(). Default 'raw'.
     * @return \WP_Post|array|null WP_Post (or array) on success, or null on failure.
     */
    public function wpGetPostRevision(int|\WP_Post &$post, string $output = OBJECT, string $filter = 'raw'): \WP_Post|array|null;
}
