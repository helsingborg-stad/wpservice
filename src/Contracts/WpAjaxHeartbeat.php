<?php

namespace WpService\Contracts;

interface WpAjaxHeartbeat
{
    /**
     * Handles the Heartbeat API via AJAX.
     *
     * Runs when the user is logged in.
     *
     * @since 3.6.0
     */
    public function wpAjaxHeartbeat(): void;
}
