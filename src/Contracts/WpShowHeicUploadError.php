<?php

namespace WpService\Contracts;

interface WpShowHeicUploadError
{
    /**
 * Callback to enable showing of the user error when uploading .heic images.
 *
 * @since 5.5.0
 *
 * @param array[] $pluploadSettings The settings for Plupload.js.
 * @return array[] Modified settings for Plupload.js.
 */
    public function wpShowHeicUploadError(array $pluploadSettings): array;
}
