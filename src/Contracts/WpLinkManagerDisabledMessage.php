<?php

namespace WpService\Contracts;

interface WpLinkManagerDisabledMessage
{
    /**
 * Outputs the 'disabled' message for the WordPress Link Manager.
 *
 * @since 3.5.0
 * @access private
 *
 * @global string $pagenow The filename of the current screen.
 */
    public function wpLinkManagerDisabledMessage(): void;
}
