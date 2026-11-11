<?php

namespace WpService\Contracts;

interface MediaUploadFlashBypass
{
/**
 * Displays the multi-file uploader message.
 *
 * @since 2.6.0
 */
    public function mediaUploadFlashBypass(): void;
}
