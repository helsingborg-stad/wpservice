<?php

namespace WpService\Contracts;

interface Iis7DeleteRewriteRule
{
    /**
     * Deletes WordPress rewrite rule from web.config file if it exists there.
     *
     * @since 2.8.0
     *
     * @param string $filename Name of the configuration file.
     * @return bool
     */
    public function iis7DeleteRewriteRule(string $filename): bool;
}
