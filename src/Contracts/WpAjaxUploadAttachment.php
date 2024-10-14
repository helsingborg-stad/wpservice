<?php

namespace WpService\Contracts;

interface WpAjaxUploadAttachment
{
/**
 * Handles uploading attachments via AJAX.
 *
 * @since 3.3.0
 */
    public function wpAjaxUploadAttachment(): void;
}
