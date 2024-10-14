<?php

namespace WpService\Contracts;

interface InstallPluginsUpload
{
/**
 * Displays a form to upload plugins from zip files.
 *
 * @since 2.8.0
 */
    public function installPluginsUpload(): void;
}
