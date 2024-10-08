<?php

namespace WpService\Contracts;

interface WpAjaxMenuQuickSearch
{
    /**
     * Handles menu quick searching via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxMenuQuickSearch(): void;
}
