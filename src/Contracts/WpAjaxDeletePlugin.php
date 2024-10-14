<?php

namespace WpService\Contracts;

interface WpAjaxDeletePlugin
{
/**
 * Handles deleting a plugin via AJAX.
 *
 * @since 4.6.0
 *
 * @see delete_plugins()
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 */
    public function wpAjaxDeletePlugin(): void;
}
