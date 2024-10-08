<?php

namespace WpService\Contracts;

interface MaintenanceNag
{
    /**
 * Displays maintenance nag HTML message.
 *
 * @since 2.7.0
 *
 * @global int $upgrading
 *
 * @return void|false
 */
    public function maintenanceNag(): false;
}
