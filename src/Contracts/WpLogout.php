<?php

namespace WpService\Contracts;

interface WpLogout
{
    /**
     * Logs the current user out.
     *
     * @since 2.5.0
     */
    public function wpLogout(): void;
}
