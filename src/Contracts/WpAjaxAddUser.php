<?php

namespace WpService\Contracts;

interface WpAjaxAddUser
{
    /**
     * Handles adding a user via AJAX.
     *
     * @since 3.1.0
     *
     * @param string $action Action to perform.
     */
    public function wpAjaxAddUser(string $action): void;
}
