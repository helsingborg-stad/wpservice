<?php

namespace WpService\Contracts;

interface WpAjaxSearchInstallPlugins
{
    /**
 * Handles searching plugins to install via AJAX.
 *
 * @since 4.6.0
 */
    public function wpAjaxSearchInstallPlugins(): void;
}
