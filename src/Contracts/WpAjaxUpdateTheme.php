<?php

namespace WpService\Contracts;

interface WpAjaxUpdateTheme
{
    /**
     * Handles updating a theme via AJAX.
     *
     * @since 4.6.0
     *
     * @see Theme_Upgrader
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     */
    public function wpAjaxUpdateTheme(): void;
}
