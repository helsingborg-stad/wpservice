<?php

namespace WpService\Contracts;

interface WpMediaelementFallback
{
/**
 * Provides a No-JS Flash fallback as a last resort for audio / video.
 *
 * @since 3.6.0
 *
 * @param string $url The media element URL.
 * @return string Fallback HTML.
 */
    public function wpMediaelementFallback(string $url): string;
}
