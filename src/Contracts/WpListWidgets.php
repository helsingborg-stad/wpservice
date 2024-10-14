<?php

namespace WpService\Contracts;

interface WpListWidgets
{
/**
 * Display list of the available widgets.
 *
 * @since 2.5.0
 *
 * @global array $wp_registered_widgets
 * @global array $wp_registered_widget_controls
 */
    public function wpListWidgets(): void;
}
