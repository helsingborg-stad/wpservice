<?php

namespace WpService\Contracts;

interface PopulateOptions
{
    /**
 * Create WordPress options and set the default values.
 *
 * @since 1.5.0
 * @since 5.1.0 The $options parameter has been added.
 *
 * @global wpdb $wpdb                  WordPress database abstraction object.
 * @global int  $wp_db_version         WordPress database version.
 * @global int  $wp_current_db_version The old (current) database version.
 *
 * @param array $options Optional. Custom option $key => $value pairs to use. Default empty array.
 */
    public function populateOptions(array $options = []): void;
}
