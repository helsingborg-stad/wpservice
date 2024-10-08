<?php

namespace WpService\Contracts;

interface AllowSubdomainInstall
{
    /**
 * Allow subdomain installation
 *
 * @since 3.0.0
 * @return bool Whether subdomain installation is allowed
 */
    public function allowSubdomainInstall(): bool;
}
