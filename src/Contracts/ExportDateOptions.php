<?php

namespace WpService\Contracts;

interface ExportDateOptions
{
/**
 * Creates the date options fields for exporting a given post type.
 *
 * @since 3.1.0
 *
 * @global wpdb      $wpdb      WordPress database abstraction object.
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @param string $postType The post type. Default 'post'.
 */
    public function exportDateOptions(string $postType = 'post'): void;
}
