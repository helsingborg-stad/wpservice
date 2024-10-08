<?php

namespace WpService\Contracts;

interface WpAdminHeaders
{
    /**
     * Sends a referrer policy header so referrers are not sent externally from administration screens.
     *
     * @since 4.9.0
     */
    public function wpAdminHeaders(): void;
}
