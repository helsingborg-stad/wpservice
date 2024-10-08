<?php

namespace WpService\Contracts;

interface MsSubdomainConstants
{
    /**
     * Defines Multisite subdomain constants and handles warnings and notices.
     *
     * VHOST is deprecated in favor of SUBDOMAIN_INSTALL, which is a bool.
     *
     * On first call, the constants are checked and defined. On second call,
     * we will have translations loaded and can trigger warnings easily.
     *
     * @since 3.0.0
     */
    public function msSubdomainConstants(): void;
}
