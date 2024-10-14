<?php

namespace WpService\Contracts;

interface MediaUploadLibrary
{
/**
 * Retrieves the legacy media library form in an iframe.
 *
 * @since 2.5.0
 *
 * @return string|null
 */
    public function mediaUploadLibrary(): string|null;
}
