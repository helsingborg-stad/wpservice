<?php

namespace WpService\Contracts;

interface WpInsertSite
{
    /**
 * Inserts a new site into the database.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $data {
 *     Data for the new site that should be inserted.
 *
 *     @type string $domain       Site domain. Default empty string.
 *     @type string $path         Site path. Default '/'.
 *     @type int    $network_id   The site's network ID. Default is the current network ID.
 *     @type string $registered   When the site was registered, in SQL datetime format. Default is
 *                                the current time.
 *     @type string $last_updated When the site was last updated, in SQL datetime format. Default is
 *                                the value of $registered.
 *     @type int    $public       Whether the site is public. Default 1.
 *     @type int    $archived     Whether the site is archived. Default 0.
 *     @type int    $mature       Whether the site is mature. Default 0.
 *     @type int    $spam         Whether the site is spam. Default 0.
 *     @type int    $deleted      Whether the site is deleted. Default 0.
 *     @type int    $lang_id      The site's language ID. Currently unused. Default 0.
 *     @type int    $user_id      User ID for the site administrator. Passed to the
 *                                `wp_initialize_site` hook.
 *     @type string $title        Site title. Default is 'Site %d' where %d is the site ID. Passed
 *                                to the `wp_initialize_site` hook.
 *     @type array  $options      Custom option $key => $value pairs to use. Default empty array. Passed
 *                                to the `wp_initialize_site` hook.
 *     @type array  $meta         Custom site metadata $key => $value pairs to use. Default empty array.
 *                                Passed to the `wp_initialize_site` hook.
 * }
 * @return int|\WP_Error The new site's ID on success, or error object on failure.
 */
    public function wpInsertSite(array $data): int|\WP_Error;
}
