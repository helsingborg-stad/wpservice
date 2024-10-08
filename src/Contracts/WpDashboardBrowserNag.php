<?php

namespace WpService\Contracts;

interface WpDashboardBrowserNag
{
    /**
 * Displays the browser update nag.
 *
 * @since 3.2.0
 * @since 5.8.0 Added a special message for Internet Explorer users.
 *
 * @global bool $is_IE
 */
    public function wpDashboardBrowserNag(): void;
}
