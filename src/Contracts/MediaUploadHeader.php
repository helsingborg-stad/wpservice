<?php

namespace WpService\Contracts;

interface MediaUploadHeader
{
/**
 * Outputs the legacy media upload header.
 *
 * @since 2.5.0
 */
    public function mediaUploadHeader(): void;
}
