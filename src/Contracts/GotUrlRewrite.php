<?php

namespace WpService\Contracts;

interface GotUrlRewrite
{
/**
 * Returns whether the server supports URL rewriting.
 *
 * Detects Apache's mod_rewrite, IIS 7.0+ permalink support, and nginx.
 *
 * @since 3.7.0
 *
 * @global bool $is_nginx
 * @global bool $is_caddy
 *
 * @return bool Whether the server supports URL rewriting.
 */
    public function gotUrlRewrite(): bool;
}
