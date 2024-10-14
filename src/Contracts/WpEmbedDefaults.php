<?php

namespace WpService\Contracts;

interface WpEmbedDefaults
{
/**
 * Creates default array of embed parameters.
 *
 * The width defaults to the content width as specified by the theme. If the
 * theme does not specify a content width, then 500px is used.
 *
 * The default height is 1.5 times the width, or 1000px, whichever is smaller.
 *
 * The {@see 'embed_defaults'} filter can be used to adjust either of these values.
 *
 * @since 2.9.0
 *
 * @global int $content_width
 *
 * @param string $url Optional. The URL that should be embedded. Default empty.
 * @return int[] {
 *     Indexed array of the embed width and height in pixels.
 *
 * @type int $0 The embed width.
 * @type int $1 The embed height.
 * }
 */
    public function wpEmbedDefaults(string $url = ''): array;
}
