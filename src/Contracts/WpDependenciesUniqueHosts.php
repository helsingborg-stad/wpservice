<?php

namespace WpService\Contracts;

interface WpDependenciesUniqueHosts
{
/**
 * Retrieves a list of unique hosts of all enqueued scripts and styles.
 *
 * @since 4.6.0
 *
 * @global WP_Scripts $wp_scripts The WP_Scripts object for printing scripts.
 * @global WP_Styles  $wp_styles  The WP_Styles object for printing styles.
 *
 * @return string[] A list of unique hosts of enqueued scripts and styles.
 */
    public function wpDependenciesUniqueHosts(): array;
}
