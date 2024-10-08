<?php

namespace WpService\Contracts;

interface WpAdminCssColor
{
    /**
 * Registers an admin color scheme css file.
 *
 * Allows a plugin to register a new admin color scheme. For example:
 *
 *     wp_admin_css_color( 'classic', __( 'Classic' ), admin_url( "css/colors-classic.css" ), array(
 *         '#07273E', '#14568A', '#D54E21', '#2683AE'
 *     ) );
 *
 * @since 2.5.0
 *
 * @global array $_wp_admin_css_colors
 *
 * @param string $key    The unique key for this theme.
 * @param string $name   The name of the theme.
 * @param string $url    The URL of the CSS file containing the color scheme.
 * @param array $colors Optional. An array of CSS color definition strings which are used
 *                       to give the user a feel for the theme.
 * @param array $icons {
 *     Optional. CSS color definitions used to color any SVG icons.
 *
 *     @type string $base    SVG icon base color.
 *     @type string $focus   SVG icon color on focus.
 *     @type string $current SVG icon color of current admin menu link.
 * }
 */
public function wpAdminCssColor(string $key, string $name, string $url, array $colors = [], array $icons = []): void;
}
