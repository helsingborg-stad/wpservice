<?php

namespace WpService\Contracts;

interface AttachmentId3DataMetaBox
{
    /**
     * Displays fields for ID3 data.
     *
     * @since 3.9.0
     *
     * @param \WP_Post $post Current post object.
     */
    public function attachmentId3DataMetaBox(\WP_Post $post): void;
}
