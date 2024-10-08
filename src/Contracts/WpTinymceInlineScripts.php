<?php

namespace WpService\Contracts;

interface WpTinymceInlineScripts
{
    /**
     * Adds inline scripts required for the TinyMCE in the block editor.
     *
     * These TinyMCE init settings are used to extend and override the default settings
     * from `_WP_Editors::default_settings()` for the Classic block.
     *
     * @since 5.0.0
     *
     * @global WP_Scripts $wp_scripts
     */
    public function wpTinymceInlineScripts(): void;
}
