<?php

namespace WpService\Contracts;

interface WpAjaxSaveWporgUsername
{
    /**
     * Handles saving the user's WordPress.org username via AJAX.
     *
     * @since 4.4.0
     */
    public function wpAjaxSaveWporgUsername(): void;
}
