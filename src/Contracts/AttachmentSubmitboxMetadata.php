<?php

namespace WpService\Contracts;

interface AttachmentSubmitboxMetadata
{
/**
 * Displays non-editable attachment metadata in the publish meta box.
 *
 * @since 3.5.0
 */
    public function attachmentSubmitboxMetadata(): void;
}
