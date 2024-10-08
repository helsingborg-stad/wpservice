<?php

namespace WpService\Contracts;

interface MediaUploadFormHandler
{
    /**
     * Handles form submissions for the legacy media uploader.
     *
     * @since 2.5.0
     *
     * @return null|array|void Array of error messages keyed by attachment ID, null or void on success.
     */
    public function mediaUploadFormHandler(): mixed;
}
