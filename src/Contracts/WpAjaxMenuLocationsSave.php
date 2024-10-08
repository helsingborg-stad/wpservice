<?php

namespace WpService\Contracts;

interface WpAjaxMenuLocationsSave
{
    /**
     * Handles saving menu locations via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxMenuLocationsSave(): void;
}
