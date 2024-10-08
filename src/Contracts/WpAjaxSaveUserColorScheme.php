<?php

namespace WpService\Contracts;

interface WpAjaxSaveUserColorScheme
{
    /**
     * Handles auto-saving the selected color scheme for
     * a user's own profile via AJAX.
     *
     * @since 3.8.0
     *
     * @global array $_wp_admin_css_colors
     */
    public function wpAjaxSaveUserColorScheme(): void;
}
