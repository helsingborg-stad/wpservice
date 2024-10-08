<?php

namespace WpService\Contracts;

interface WpStyleLoaderSrc
{
    /**
 * Administration Screen CSS for changing the styles.
 *
 * If installing the 'wp-admin/' directory will be replaced with './'.
 *
 * The $_wp_admin_css_colors global manages the Administration Screens CSS
 * stylesheet that is loaded. The option that is set is 'admin_color' and is the
 * color and key for the array. The value for the color key is an object with
 * a 'url' parameter that has the URL path to the CSS file.
 *
 * The query from $src parameter will be appended to the URL that is given from
 * the $_wp_admin_css_colors array value URL.
 *
 * @since 2.6.0
 *
 * @global array $_wp_admin_css_colors
 *
 * @param string $src    Source URL.
 * @param string $handle Either 'colors' or 'colors-rtl'.
 * @return string|false URL path to CSS stylesheet for Administration Screens.
 */
    public function wpStyleLoaderSrc(string $src, string $handle): string|false;
}
