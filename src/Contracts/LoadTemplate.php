<?php

namespace WpService\Contracts;

interface LoadTemplate
{
/**
 * Requires the template file with WordPress environment.
 *
 * The globals are set up for the template file to ensure that the WordPress
 * environment is available from within the function. The query variables are
 * also available.
 *
 * @since 1.5.0
 * @since 5.5.0 The `$args` parameter was added.
 *
 * @global array      $posts
 * @global WP_Post    $post          Global post object.
 * @global bool       $wp_did_header
 * @global WP_Query   $wp_query      WordPress Query object.
 * @global WP_Rewrite $wp_rewrite    WordPress rewrite component.
 * @global wpdb       $wpdb          WordPress database abstraction object.
 * @global string     $wp_version
 * @global WP         $wp            Current WordPress environment instance.
 * @global int        $id
 * @global WP_Comment $comment       Global comment object.
 * @global int        $user_ID
 *
 * @param string $templateFile Path to template file.
 * @param bool $loadOnce      Whether to require_once or require. Default true.
 * @param array $args           Optional. Additional arguments passed to the template.
 *                               Default empty array.
 */
    public function loadTemplate(string $templateFile, bool $loadOnce = true, array $args = []): void;
}
