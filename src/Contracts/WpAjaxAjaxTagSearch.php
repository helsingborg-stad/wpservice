<?php

namespace WpService\Contracts;

interface WpAjaxAjaxTagSearch
{
    /**
     * Handles tag search via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxAjaxTagSearch(): void;
}
