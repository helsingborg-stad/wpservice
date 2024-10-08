<?php

namespace WpService\Contracts;

interface WpAjaxHiddenColumns
{
    /**
     * Handles hidden columns via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxHiddenColumns(): void;
}
