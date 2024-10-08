<?php

namespace WpService\Contracts;

interface WpAjaxAddMenuItem
{
    /**
     * Handles adding a menu item via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxAddMenuItem(): void;
}
