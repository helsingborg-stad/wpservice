<?php

namespace WpService\Contracts;

interface WpGetAttachmentId3Keys
{
    /**
     * Returns useful keys to use to lookup data from an attachment's stored metadata.
     *
     * @since 3.9.0
     *
     * @param \WP_Post $attachment The current attachment, provided for context.
     * @param string $context    Optional. The context. Accepts 'edit', 'display'. Default 'display'.
     * @return string[] Key/value pairs of field keys to labels.
     */
    public function wpGetAttachmentId3Keys(\WP_Post $attachment, string $context = 'display'): array;
}
