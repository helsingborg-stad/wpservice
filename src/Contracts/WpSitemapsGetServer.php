<?php

namespace WpService\Contracts;

interface WpSitemapsGetServer
{
    /**
 * Retrieves the current Sitemaps server instance.
 *
 * @since 5.5.0
 *
 * @global WP_Sitemaps $wp_sitemaps Global Core Sitemaps instance.
 *
 * @return \WP_Sitemaps Sitemaps instance.
 */
    public function wpSitemapsGetServer(): \WP_Sitemaps;
}
