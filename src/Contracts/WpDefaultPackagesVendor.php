<?php

namespace WpService\Contracts;

interface WpDefaultPackagesVendor
{
    /**
     * Registers all the WordPress vendor scripts that are in the standardized
     * `js/dist/vendor/` location.
     *
     * For the order of `$scripts->add` see `wp_default_scripts`.
     *
     * @since 5.0.0
     *
     * @global WP_Locale $wp_locale WordPress date and time locale object.
     *
     * @param \WP_Scripts $scripts WP_Scripts object.
     */
    public function wpDefaultPackagesVendor(\WP_Scripts $scripts): void;
}
