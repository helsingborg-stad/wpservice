<?php

namespace WpService\Contracts;

interface WpCheckWidgetEditorDeps
{
    /**
 * Displays a _doing_it_wrong() message for conflicting widget editor scripts.
 *
 * The 'wp-editor' script module is exposed as window.wp.editor. This overrides
 * the legacy TinyMCE editor module which is required by the widgets editor.
 * Because of that conflict, these two shouldn't be enqueued together.
 * See https://core.trac.wordpress.org/ticket/53569.
 *
 * There is also another conflict related to styles where the block widgets
 * editor is hidden if a block enqueues 'wp-edit-post' stylesheet.
 * See https://core.trac.wordpress.org/ticket/53569.
 *
 * @since 5.8.0
 * @access private
 *
 * @global WP_Scripts $wp_scripts
 * @global WP_Styles  $wp_styles
 */
    public function wpCheckWidgetEditorDeps(): void;
}
