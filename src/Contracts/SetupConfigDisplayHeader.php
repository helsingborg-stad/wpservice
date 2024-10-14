<?php

namespace WpService\Contracts;

interface SetupConfigDisplayHeader
{
/**
 * Display setup wp-config.php file header.
 *
 * @ignore
 * @since 2.3.0
 *
 * @param string|string[] $bodyClasses Class attribute values for the body tag.
 */
    public function setupConfigDisplayHeader(string|array $bodyClasses = []): void;
}
