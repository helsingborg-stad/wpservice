<?php

namespace WpService\Contracts;

interface WpDefaultPackagesInlineScripts
{
    /**
     * Adds inline scripts required for the WordPress JavaScript packages.
     *
     * @since 5.0.0
     * @since 6.4.0 Added relative time strings for the `wp-date` inline script output.
     *
     * @global WP_Locale $wp_locale WordPress date and time locale object.
     * @global wpdb      $wpdb      WordPress database abstraction object.
     *
     * @param \WP_Scripts $scripts WP_Scripts object.
     */
    public function wpDefaultPackagesInlineScripts(\WP_Scripts $scripts): void;
}
