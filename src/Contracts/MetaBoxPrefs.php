<?php

namespace WpService\Contracts;

interface MetaBoxPrefs
{
/**
 * Prints the meta box preferences for screen meta.
 *
 * @since 2.7.0
 *
 * @global array $wp_meta_boxes Global meta box state.
 *
 * @param \WP_Screen $screen
 */
    public function metaBoxPrefs(\WP_Screen $screen): void;
}
