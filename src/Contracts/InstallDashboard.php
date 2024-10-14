<?php

namespace WpService\Contracts;

interface InstallDashboard
{
/**
 * Displays the Featured tab of Add Plugins screen.
 *
 * @since 2.7.0
 */
    public function installDashboard(): void;
}
