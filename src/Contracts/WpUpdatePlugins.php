<?php

namespace WpService\Contracts;

interface WpUpdatePlugins
{
/**
 * Checks for available updates to plugins based on the latest versions hosted on WordPress.org.
 *
 * Despite its name this function does not actually perform any updates, it only checks for available updates.
 *
 * A list of all plugins installed is sent to api.wordpress.org, along with the site locale.
 *
 * Checks against the WordPress server at api.wordpress.org. Will only check
 * if WordPress isn't installing.
 *
 * @since 2.3.0
 *
 * @param array $extraStats Extra statistics to report to the WordPress.org API.
 */
    public function wpUpdatePlugins(array $extraStats = []): void;
}
