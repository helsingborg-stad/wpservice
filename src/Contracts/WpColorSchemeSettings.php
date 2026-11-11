<?php

namespace WpService\Contracts;

interface WpColorSchemeSettings
{
/**
 *
 * @since 3.8.0
 *
 * @global array $_wp_admin_css_colors
 */
    public function wpColorSchemeSettings(): void;
}
