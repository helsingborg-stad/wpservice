<?php

namespace WpService\Contracts;

interface WpVersionCheck
{
/**
 * Checks WordPress version against the newest version.
 *
 * The WordPress version, PHP version, and locale is sent to api.wordpress.org.
 *
 * Checks against the WordPress server at api.wordpress.org. Will only check
 * if WordPress isn't installing.
 *
 * @since 2.3.0
 *
 * @global wpdb   $wpdb             WordPress database abstraction object.
 * @global string $wp_local_package Locale code of the package.
 *
 * @param array $extraStats Extra statistics to report to the WordPress.org API.
 * @param bool $forceCheck Whether to bypass the transient cache and force a fresh update check.
 *                           Defaults to false, true if $extra_stats is set.
 */
    public function wpVersionCheck(array $extraStats = [], bool $forceCheck = false): void;
}
