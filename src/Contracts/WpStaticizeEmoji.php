<?php

namespace WpService\Contracts;

interface WpStaticizeEmoji
{
/**
 * Converts emoji to a static img element.
 *
 * @since 4.2.0
 *
 * @param string $text The content to encode.
 * @return string The encoded content.
 */
    public function wpStaticizeEmoji(string $text): string;
}
