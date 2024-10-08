<?php

namespace WpService\Contracts;

interface WpAjaxUpdateWelcomePanel
{
    /**
     * Handles updating whether to display the welcome panel via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxUpdateWelcomePanel(): void;
}
