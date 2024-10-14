<?php

namespace WpService\Contracts;

interface WpIframe
{
/**
 * Outputs the iframe to display the media upload page.
 *
 * @since 2.5.0
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 *
 * @global string $body_id
 *
 * @param callable $contentFunc Function that outputs the content.
 * @param mixed    ...$args      Optional additional parameters to pass to the callback function when it's called.
 */
    public function wpIframe(callable $contentFunc, mixed ...$args): void;
}
