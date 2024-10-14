<?php

namespace WpService\Contracts;

interface WpEmbedHandlerYoutube
{
/**
 * YouTube iframe embed handler callback.
 *
 * Catches YouTube iframe embed URLs that are not parsable by oEmbed but can be translated into a URL that is.
 *
 * @since 4.0.0
 *
 * @global WP_Embed $wp_embed WordPress Embed object.
 *
 * @param array $matches The RegEx matches from the provided regex when calling
 *                        wp_embed_register_handler().
 * @param array $attr    Embed attributes.
 * @param string $url     The original URL that was matched by the regex.
 * @param array $rawattr The original unmodified attributes.
 * @return string The embed HTML.
 */
    public function wpEmbedHandlerYoutube(array $matches, array $attr, string $url, array $rawattr): string;
}
