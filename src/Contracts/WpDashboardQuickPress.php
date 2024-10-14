<?php

namespace WpService\Contracts;

interface WpDashboardQuickPress
{
/**
 * Displays the Quick Draft widget.
 *
 * @since 3.8.0
 *
 * @global int $post_ID
 *
 * @param string|false $errorMsg Optional. Error message. Default false.
 */
    public function wpDashboardQuickPress(string|false $errorMsg = false): void;
}
