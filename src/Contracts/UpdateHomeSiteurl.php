<?php

namespace WpService\Contracts;

interface UpdateHomeSiteurl
{
/**
 * Flushes rewrite rules if `siteurl`, `home` or `page_on_front` changed.
 *
 * @since 2.1.0
 *
 * @param string $oldValue
 * @param string $value
 */
    public function updateHomeSiteurl(string $oldValue, string $value): void;
}
