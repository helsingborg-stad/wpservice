<?php

namespace WpService\Contracts;

interface IsSubdomainInstall
{
    /**
     * Whether a subdomain configuration is enabled.
     *
     * @since 3.0.0
     *
     * @return bool True if subdomain configuration is enabled, false otherwise.
     */
    public function isSubdomainInstall(): bool;
}
