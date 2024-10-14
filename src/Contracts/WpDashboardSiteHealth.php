<?php

namespace WpService\Contracts;

interface WpDashboardSiteHealth
{
/**
 * Displays the Site Health Status widget.
 *
 * @since 5.4.0
 */
    public function wpDashboardSiteHealth(): void;
}
