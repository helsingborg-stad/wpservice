<?php

namespace WpService\Contracts;

interface WpImportHandleUpload
{
    /**
 * Handles importer uploading and adds attachment.
 *
 * @since 2.0.0
 *
 * @return array Uploaded file's details on success, error message on failure.
 */
    public function wpImportHandleUpload(): array;
}
