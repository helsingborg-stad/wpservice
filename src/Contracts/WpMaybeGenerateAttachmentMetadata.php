<?php

namespace WpService\Contracts;

interface WpMaybeGenerateAttachmentMetadata
{
    /**
     * Maybe attempts to generate attachment metadata, if missing.
     *
     * @since 3.9.0
     *
     * @param \WP_Post $attachment Attachment object.
     */
    public function wpMaybeGenerateAttachmentMetadata(\WP_Post $attachment): void;
}
