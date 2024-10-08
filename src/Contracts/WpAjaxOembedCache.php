<?php

namespace WpService\Contracts;

interface WpAjaxOembedCache
{
    /**
 * Handles oEmbed caching via AJAX.
 *
 * @since 3.1.0
 *
 * @global WP_Embed $wp_embed WordPress Embed object.
 */
    public function wpAjaxOembedCache(): void;
}
