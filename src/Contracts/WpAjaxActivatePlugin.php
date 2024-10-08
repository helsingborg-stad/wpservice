<?php

namespace WpService\Contracts;

interface WpAjaxActivatePlugin
{
    /**
 * Handles activating a plugin via AJAX.
 *
 * @since 6.5.0
 */
    public function wpAjaxActivatePlugin(): void;
}
