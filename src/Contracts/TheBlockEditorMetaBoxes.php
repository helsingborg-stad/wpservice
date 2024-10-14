<?php

namespace WpService\Contracts;

interface TheBlockEditorMetaBoxes
{
/**
 * Renders the meta boxes forms.
 *
 * @since 5.0.0
 *
 * @global WP_Post   $post           Global post object.
 * @global WP_Screen $current_screen WordPress current screen object.
 * @global array     $wp_meta_boxes  Global meta box state.
 */
    public function theBlockEditorMetaBoxes(): void;
}
