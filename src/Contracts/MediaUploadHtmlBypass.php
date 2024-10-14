<?php

namespace WpService\Contracts;

interface MediaUploadHtmlBypass
{
/**
 * Displays the browser's built-in uploader message.
 *
 * @since 2.6.0
 */
    public function mediaUploadHtmlBypass(): void;
}
