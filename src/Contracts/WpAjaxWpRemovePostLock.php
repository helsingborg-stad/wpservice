<?php

namespace WpService\Contracts;

interface WpAjaxWpRemovePostLock
{
    /**
     * Handles removing a post lock via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxWpRemovePostLock(): void;
}
