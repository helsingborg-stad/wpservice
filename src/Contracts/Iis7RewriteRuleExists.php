<?php

namespace WpService\Contracts;

interface Iis7RewriteRuleExists
{
    /**
 * Checks if rewrite rule for WordPress already exists in the IIS 7+ configuration file.
 *
 * @since 2.8.0
 *
 * @param string $filename The file path to the configuration file.
 * @return bool
 */
    public function iis7RewriteRuleExists(string $filename): bool;
}
