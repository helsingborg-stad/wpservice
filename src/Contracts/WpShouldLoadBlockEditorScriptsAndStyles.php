<?php

namespace WpService\Contracts;

interface WpShouldLoadBlockEditorScriptsAndStyles
{
/**
 * Checks if the editor scripts and styles for all registered block types
 * should be enqueued on the current screen.
 *
 * @since 5.6.0
 *
 * @global WP_Screen $current_screen WordPress current screen object.
 *
 * @return bool Whether scripts and styles should be enqueued.
 */
    public function wpShouldLoadBlockEditorScriptsAndStyles(): bool;
}
