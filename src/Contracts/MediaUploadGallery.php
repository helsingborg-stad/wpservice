<?php

namespace WpService\Contracts;

interface MediaUploadGallery
{
/**
 * Retrieves the legacy media uploader form in an iframe.
 *
 * @since 2.5.0
 *
 * @return string|null
 */
    public function mediaUploadGallery(): string|null;
}
