<?php

namespace WpService\Contracts;

interface WpAjaxUpdatePlugin
{
    /**
     * Handles updating a plugin via AJAX.
     *
     * @since 4.2.0
     *
     * @see Plugin_Upgrader
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     */
    public function wpAjaxUpdatePlugin(): void;
}
