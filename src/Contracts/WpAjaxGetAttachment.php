<?php

namespace WpService\Contracts;

interface WpAjaxGetAttachment
{
    /**
     * Handles getting an attachment via AJAX.
     *
     * @since 3.5.0
     */
    public function wpAjaxGetAttachment(): void;
}
