<?php

namespace WpService\Contracts;

interface WpGetOriginalImagePath
{
    /**
 * Retrieves the path to an uploaded image file.
 *
 * Similar to `get_attached_file()` however some images may have been processed after uploading
 * to make them suitable for web use. In this case the attached "full" size file is usually replaced
 * with a scaled down version of the original image. This function always returns the path
 * to the originally uploaded image file.
 *
 * @since 5.3.0
 * @since 5.4.0 Added the `$unfiltered` parameter.
 *
 * @param int $attachmentId Attachment ID.
 * @param bool $unfiltered Optional. Passed through to `get_attached_file()`. Default false.
 * @return string|false Path to the original image file or false if the attachment is not an image.
 */
    public function wpGetOriginalImagePath(int $attachmentId, bool $unfiltered): string|false;
}
