<?php

namespace WpService\Contracts;

interface WpAjaxInlineSave
{
/**
 * Handles Quick Edit saving a post from a list table via AJAX.
 *
 * @since 3.1.0
 *
 * @global string $mode List table view mode.
 */
    public function wpAjaxInlineSave(): void;
}
