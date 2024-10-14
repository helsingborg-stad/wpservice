<?php

namespace WpService\Contracts;

interface WpAjaxSaveWidget
{
/**
 * Handles saving a widget via AJAX.
 *
 * @since 3.1.0
 *
 * @global array $wp_registered_widgets
 * @global array $wp_registered_widget_controls
 * @global array $wp_registered_widget_updates
 */
    public function wpAjaxSaveWidget(): void;
}
