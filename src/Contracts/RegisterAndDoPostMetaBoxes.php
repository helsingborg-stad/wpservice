<?php

namespace WpService\Contracts;

interface RegisterAndDoPostMetaBoxes
{
/**
 * Registers the default post meta boxes, and runs the `do_meta_boxes` actions.
 *
 * @since 5.0.0
 *
 * @param \WP_Post $post The post object that these meta boxes are being generated for.
 */
    public function registerAndDoPostMetaBoxes(\WP_Post $post): void;
}
