<?php

namespace WpService\Contracts;

interface WpAjaxNoprivHeartbeat
{
    /**
 * Handles the Heartbeat API in the no-privilege context via AJAX .
 *
 * Runs when the user is not logged in.
 *
 * @since 3.6.0
 */
    public function wpAjaxNoprivHeartbeat(): void;
}
