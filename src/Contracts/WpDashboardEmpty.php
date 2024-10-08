<?php

namespace WpService\Contracts;

interface WpDashboardEmpty
{
    /**
     * Outputs empty dashboard widget to be populated by JS later.
     *
     * Usable by plugins.
     *
     * @since 2.5.0
     */
    public function wpDashboardEmpty(): void;
}
