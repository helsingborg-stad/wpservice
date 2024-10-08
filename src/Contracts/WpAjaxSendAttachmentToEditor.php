<?php

namespace WpService\Contracts;

interface WpAjaxSendAttachmentToEditor
{
    /**
     * Handles sending an attachment to the editor via AJAX.
     *
     * Generates the HTML to send an attachment to the editor.
     * Backward compatible with the {@see 'media_send_to_editor'} filter
     * and the chain of filters that follow.
     *
     * @since 3.5.0
     */
    public function wpAjaxSendAttachmentToEditor(): void;
}
