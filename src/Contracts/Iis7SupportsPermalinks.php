<?php

namespace WpService\Contracts;

interface Iis7SupportsPermalinks
{
    /**
 * Checks if IIS 7+ supports pretty permalinks.
 *
 * @since 2.8.0
 *
 * @global bool $is_iis7
 *
 * @return bool Whether IIS7 supports permalinks.
 */
    public function iis7SupportsPermalinks(): bool;
}
