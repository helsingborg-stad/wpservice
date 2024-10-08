<?php

namespace WpService\Contracts;

interface WpAjaxParseEmbed
{
    /**
 * Applies [embed] Ajax handlers to a string.
 *
 * @since 4.0.0
 *
 * @global WP_Post    $post          Global post object.
 * @global WP_Embed   $wp_embed      WordPress Embed object.
 * @global WP_Scripts $wp_scripts
 * @global int        $content_width
 */
    public function wpAjaxParseEmbed(): void;
}
