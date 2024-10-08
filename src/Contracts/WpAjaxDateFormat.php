<?php

namespace WpService\Contracts;

interface WpAjaxDateFormat
{
    /**
     * Handles formatting a date via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxDateFormat(): void;
}
