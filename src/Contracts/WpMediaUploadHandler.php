<?php

namespace WpService\Contracts;

interface WpMediaUploadHandler
{
/**
 * Handles the process of uploading media.
 *
 * @since 2.5.0
 *
 * @return null|string
 */
    public function wpMediaUploadHandler(): null|string;
}
