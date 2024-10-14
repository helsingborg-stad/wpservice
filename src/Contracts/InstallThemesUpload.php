<?php

namespace WpService\Contracts;

interface InstallThemesUpload
{
/**
 * Displays a form to upload themes from zip files.
 *
 * @since 2.8.0
 */
    public function installThemesUpload(): void;
}
