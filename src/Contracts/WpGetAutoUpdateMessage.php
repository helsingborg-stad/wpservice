<?php

namespace WpService\Contracts;

interface WpGetAutoUpdateMessage
{
    /**
 * Determines the appropriate auto-update message to be displayed.
 *
 * @since 5.5.0
 *
 * @return string The update message to be shown.
 */
    public function wpGetAutoUpdateMessage(): string;
}
