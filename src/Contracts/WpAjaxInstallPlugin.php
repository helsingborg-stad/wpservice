<?php

namespace WpService\Contracts;

interface WpAjaxInstallPlugin
{
    /**
     * Handles installing a plugin via AJAX.
     *
     * @since 4.6.0
     *
     * @see Plugin_Upgrader
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     */
    public function wpAjaxInstallPlugin(): void;
}
