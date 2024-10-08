<?php

namespace WpService\Contracts;

interface WpAjaxEditThemePluginFile
{
    /**
     * Handles editing a theme or plugin file via AJAX.
     *
     * @since 4.9.0
     *
     * @see wp_edit_theme_plugin_file()
     */
    public function wpAjaxEditThemePluginFile(): void;
}
