<?php

namespace WpService\Contracts;

interface MediaUploadLibraryForm
{
/**
 * Outputs the legacy media upload form for the media library.
 *
 * @since 2.5.0
 *
 * @global wpdb      $wpdb            WordPress database abstraction object.
 * @global WP_Query  $wp_query        WordPress Query object.
 * @global WP_Locale $wp_locale       WordPress date and time locale object.
 * @global string    $type
 * @global string    $tab
 * @global array     $post_mime_types
 *
 * @param array $errors
 */
    public function mediaUploadLibraryForm(array $errors): void;
}
