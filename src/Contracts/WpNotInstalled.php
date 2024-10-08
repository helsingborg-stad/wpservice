<?php

namespace WpService\Contracts;

interface WpNotInstalled
{
    /**
 * Redirects to the installer if WordPress is not installed.
 *
 * Dies with an error message when Multisite is enabled.
 *
 * @since 3.0.0
 * @access private
 */
    public function wpNotInstalled(): void;
}
