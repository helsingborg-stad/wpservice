<?php

namespace WpService\Contracts;

interface AttachmentSubmitMetaBox
{
    /**
 * Displays attachment submit form fields.
 *
 * @since 3.5.0
 *
 * @param \WP_Post $post Current post object.
 */
    public function attachmentSubmitMetaBox(\WP_Post $post): void;
}
