<?php

namespace WpService\Contracts;

interface WpColorSchemeSettings
{
    /**
 *
 * @global array $_wp_admin_css_colors
 */
    public function wpColorSchemeSettings(): void;
}
