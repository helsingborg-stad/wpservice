<?php

namespace WpService\Contracts;

interface WpAjaxTimeFormat
{
/**
 * Handles formatting a time via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxTimeFormat(): void;
}
