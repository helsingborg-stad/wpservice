<?php

namespace WpService\Contracts;

interface UpdatePostThumbnailCache
{
    /**
 * Updates cache for thumbnails in the current loop.
 *
 * @since 3.2.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param \WP_Query $wpQuery Optional. A WP_Query instance. Defaults to the $wp_query global.
 */
    public function updatePostThumbnailCache(\WP_Query $wpQuery = null): void;
}
