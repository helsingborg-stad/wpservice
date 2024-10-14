<?php

namespace WpService\Contracts;

interface WpResourceHints
{
/**
 * Prints resource hints to browsers for pre-fetching, pre-rendering
 * and pre-connecting to websites.
 *
 * Gives hints to browsers to prefetch specific pages or render them
 * in the background, to perform DNS lookups or to begin the connection
 * handshake (DNS, TCP, TLS) in the background.
 *
 * These performance improving indicators work by using `<link rel"…">`.
 *
 * @since 4.6.0
 */
    public function wpResourceHints(): void;
}
