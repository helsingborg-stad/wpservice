<?php

namespace WpService\Contracts;

interface WpScripts
{
    /**
 * Initializes $wp_scripts if it has not been set.
 *
 * @since 4.2.0
 *
 * @global WP_Scripts $wp_scripts
 *
 * @return \WP_Scripts WP_Scripts instance.
 */
    public function wpScripts(): \WP_Scripts;
}
