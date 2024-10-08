<?php

namespace WpService\Contracts;

interface GetPageByPath
{
    /**
     * Retrieves a page given its path.
     *
     * @since 2.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $pagePath Page path.
     * @param string $output    Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
     *                                correspond to a WP_Post object, an associative array, or a numeric array,
     *                                respectively. Default OBJECT.
     * @param string|array $postType Optional. Post type or array of post types. Default 'page'.
     * @return \WP_Post|array|null WP_Post (or array) on success, or null on failure.
     */
    public function getPageByPath(string $pagePath, string $output = OBJECT, string|array $postType = 'page'): \WP_Post|array|null;
}
