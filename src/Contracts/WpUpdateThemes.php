<?php

namespace WpService\Contracts;

interface WpUpdateThemes
{
/**
 * Checks for available updates to themes based on the latest versions hosted on WordPress.org.
 *
 * Despite its name this function does not actually perform any updates, it only checks for available updates.
 *
 * A list of all themes installed is sent to WP, along with the site locale.
 *
 * Checks against the WordPress server at api.wordpress.org. Will only check
 * if WordPress isn't installing.
 *
 * @since 2.7.0
 *
 * @global string $wp_version The WordPress version string.
 *
 * @param array $extraStats Extra statistics to report to the WordPress.org API.
 */
    public function wpUpdateThemes(array $extraStats = []): void;
}
