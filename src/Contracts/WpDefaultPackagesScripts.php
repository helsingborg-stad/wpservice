<?php

namespace WpService\Contracts;

interface WpDefaultPackagesScripts
{
    /**
     * Registers all the WordPress packages scripts that are in the standardized
     * `js/dist/` location.
     *
     * For the order of `$scripts->add` see `wp_default_scripts`.
     *
     * @since 5.0.0
     *
     * @param \WP_Scripts $scripts WP_Scripts object.
     */
    public function wpDefaultPackagesScripts(\WP_Scripts $scripts): void;
}
