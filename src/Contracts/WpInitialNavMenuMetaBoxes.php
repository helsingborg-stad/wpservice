<?php

namespace WpService\Contracts;

interface WpInitialNavMenuMetaBoxes
{
    /**
     * Limit the amount of meta boxes to pages, posts, links, and categories for first time users.
     *
     * @since 3.0.0
     *
     * @global array $wp_meta_boxes Global meta box state.
     */
    public function wpInitialNavMenuMetaBoxes(): void;
}
