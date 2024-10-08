<?php

namespace WpService\Contracts;

interface Iis7AddRewriteRule
{
    /**
 * Adds WordPress rewrite rule to the IIS 7+ configuration file.
 *
 * @since 2.8.0
 *
 * @param string $filename     The file path to the configuration file.
 * @param string $rewriteRule The XML fragment with URL Rewrite rule.
 * @return bool
 */
    public function iis7AddRewriteRule(string $filename, string $rewriteRule): bool;
}
