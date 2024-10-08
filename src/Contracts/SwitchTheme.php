<?php

namespace WpService\Contracts;

interface SwitchTheme
{
    /**
 * Switches the theme.
 *
 * Accepts one argument: $stylesheet of the theme. It also accepts an additional function signature
 * of two arguments: $template then $stylesheet. This is for backward compatibility.
 *
 * @since 2.5.0
 *
 * @global array                $wp_theme_directories
 * @global WP_Customize_Manager $wp_customize
 * @global array                $sidebars_widgets
 * @global array                $wp_registered_sidebars
 *
 * @param string $stylesheet Stylesheet name.
 */
    public function switchTheme(string $stylesheet): void;
}
