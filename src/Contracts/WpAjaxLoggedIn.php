<?php

namespace WpService\Contracts;

interface WpAjaxLoggedIn
{
/**
 * Handles Customizer preview logged-in status via AJAX.
 *
 * @since 3.4.0
 */
    public function wpAjaxLoggedIn(): void;
}
