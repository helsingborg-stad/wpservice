<?php

namespace WpService\Contracts;

interface WpAjaxSaveAttachmentOrder
{
/**
 * Handles saving the attachment order via AJAX.
 *
 * @since 3.5.0
 */
    public function wpAjaxSaveAttachmentOrder(): void;
}
