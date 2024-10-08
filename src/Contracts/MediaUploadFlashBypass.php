<?php

namespace WpService\Contracts;

interface MediaUploadFlashBypass
{
    /**
     * Displays the multi-file uploader message.
     *
     * @since 2.6.0
     *
     * @global int $post_ID
     */
    public function mediaUploadFlashBypass(): void;
}
