<?php

namespace WpService\Contracts;

interface WpAjaxDestroySessions
{
/**
 * Handles destroying multiple open sessions for a user via AJAX.
 *
 * @since 4.1.0
 */
    public function wpAjaxDestroySessions(): void;
}
