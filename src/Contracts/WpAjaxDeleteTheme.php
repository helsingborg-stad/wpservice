<?php

namespace WpService\Contracts;

interface WpAjaxDeleteTheme
{
/**
 * Handles deleting a theme via AJAX.
 *
 * @since 4.6.0
 *
 * @see delete_theme()
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 */
    public function wpAjaxDeleteTheme(): void;
}
