<?php

namespace WpService\Contracts;

interface AllowSubdirectoryInstall
{
/**
 * Allow subdirectory installation.
 *
 * @since 3.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @return bool Whether subdirectory installation is allowed
 */
    public function allowSubdirectoryInstall(): bool;
}
