<?php

namespace WpService\Contracts;

interface WpAjaxSearchPlugins
{
    /**
     * Handles searching plugins via AJAX.
     *
     * @since 4.6.0
     *
     * @global string $s Search term.
     */
    public function wpAjaxSearchPlugins(): void;
}
