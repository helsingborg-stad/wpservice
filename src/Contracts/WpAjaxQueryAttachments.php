<?php

namespace WpService\Contracts;

interface WpAjaxQueryAttachments
{
    /**
 * Handles querying attachments via AJAX.
 *
 * @since 3.5.0
 */
    public function wpAjaxQueryAttachments(): void;
}
