<?php

namespace WpService\Contracts;

interface WpAjaxToggleAutoUpdates
{
    /**
     * Handles enabling or disable plugin and theme auto-updates via AJAX.
     *
     * @since 5.5.0
     */
    public function wpAjaxToggleAutoUpdates(): void;
}
