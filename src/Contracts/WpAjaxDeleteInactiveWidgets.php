<?php

namespace WpService\Contracts;

interface WpAjaxDeleteInactiveWidgets
{
/**
 * Handles removing inactive widgets via AJAX.
 *
 * @since 4.4.0
 */
    public function wpAjaxDeleteInactiveWidgets(): void;
}
