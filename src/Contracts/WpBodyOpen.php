<?php

namespace WpService\Contracts;

interface WpBodyOpen
{
/**
 * Fires the wp_body_open action.
 *
 * See {@see 'wp_body_open'}.
 *
 * @since 5.2.0
 */
    public function wpBodyOpen(): void;
}
