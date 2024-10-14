<?php

namespace WpService\Contracts;

interface WpAjaxWidgetsOrder
{
/**
 * Handles saving the widgets order via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxWidgetsOrder(): void;
}
