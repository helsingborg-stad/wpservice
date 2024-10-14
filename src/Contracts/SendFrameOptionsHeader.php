<?php

namespace WpService\Contracts;

interface SendFrameOptionsHeader
{
/**
 * Sends a HTTP header to limit rendering of pages to same origin iframes.
 *
 * @since 3.1.3
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Frame-Options
 */
    public function sendFrameOptionsHeader(): void;
}
