<?php

namespace WpService\Contracts;

interface WpAjaxFetchList
{
    /**
 * Handles fetching a list table via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxFetchList(): void;
}
