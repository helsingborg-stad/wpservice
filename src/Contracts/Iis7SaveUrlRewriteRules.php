<?php

namespace WpService\Contracts;

interface Iis7SaveUrlRewriteRules
{
    /**
     * Updates the IIS web.config file with the current rules if it is writable.
     * If the permalinks do not require rewrite rules then the rules are deleted from the web.config file.
     *
     * @since 2.8.0
     *
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     *
     * @return bool|null True on write success, false on failure. Null in multisite.
     */
    public function iis7SaveUrlRewriteRules(): bool|null;
}
