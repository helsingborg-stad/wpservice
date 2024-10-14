<?php

namespace WpService\Contracts;

interface InstallPluginInformation
{
/**
 * Displays plugin information in dialog box form.
 *
 * @since 2.7.0
 *
 * @global string $tab
 */
    public function installPluginInformation(): void;
}
