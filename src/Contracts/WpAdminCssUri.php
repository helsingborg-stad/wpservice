<?php

namespace WpService\Contracts;

interface WpAdminCssUri
{
/**
 * Displays the URL of a WordPress admin CSS file.
 *
 * @see WP_Styles::_css_href() and its {@see 'style_loader_src'} filter.
 *
 * @since 2.3.0
 *
 * @param string $file file relative to wp-admin/ without its ".css" extension.
 * @return string
 */
public function wpAdminCssUri(string $file = 'wp-admin'): string;
}