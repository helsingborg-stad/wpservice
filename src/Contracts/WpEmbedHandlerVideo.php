<?php

namespace WpService\Contracts;

interface WpEmbedHandlerVideo
{
/**
 * Video embed handler callback.
 *
 * @since 3.6.0
 *
 * @param array $matches The RegEx matches from the provided regex when calling wp_embed_register_handler().
 * @param array $attr    Embed attributes.
 * @param string $url     The original URL that was matched by the regex.
 * @param array $rawattr The original unmodified attributes.
 * @return string The embed HTML.
 */
    public function wpEmbedHandlerVideo(array $matches, array $attr, string $url, array $rawattr): string;
}
