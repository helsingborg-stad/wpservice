<?php

namespace WpService\Contracts;

interface WpDefaultPackages
{
/**
 * Registers all the WordPress packages scripts.
 *
 * @since 5.0.0
 *
 * @param \WP_Scripts $scripts WP_Scripts object.
 */
    public function wpDefaultPackages(\WP_Scripts $scripts): void;
}
