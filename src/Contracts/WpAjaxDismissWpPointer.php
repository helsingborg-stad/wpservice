<?php

namespace WpService\Contracts;

interface WpAjaxDismissWpPointer
{
    /**
     * Handles dismissing a WordPress pointer via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxDismissWpPointer(): void;
}
