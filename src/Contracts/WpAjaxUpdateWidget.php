<?php

namespace WpService\Contracts;

interface WpAjaxUpdateWidget
{
    /**
 * Handles updating a widget via AJAX.
 *
 * @since 3.9.0
 *
 * @global WP_Customize_Manager $wp_customize
 */
    public function wpAjaxUpdateWidget(): void;
}
