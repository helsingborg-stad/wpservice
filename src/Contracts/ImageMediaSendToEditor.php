<?php

namespace WpService\Contracts;

interface ImageMediaSendToEditor
{
    /**
     * Retrieves the media element HTML to send to the editor.
     *
     * @since 2.5.0
     *
     * @param string $html
     * @param int $attachmentId
     * @param array $attachment
     * @return string
     */
    public function imageMediaSendToEditor(string $html, int $attachmentId, array $attachment): string;
}
