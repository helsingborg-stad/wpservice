<?php

namespace WpService\Contracts;

interface LoadImageToEdit
{
    /**
 * Loads an image resource for editing.
 *
 * @since 2.9.0
 *
 * @param int $attachmentId Attachment ID.
 * @param string $mimeType     Image mime type.
 * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array
 *                                    of width and height values in pixels (in that order). Default 'full'.
 * @return \resource|\GdImage|false The resulting image resource or GdImage instance on success,
 *                                false on failure.
 */
    public function loadImageToEdit(int $attachmentId, string $mimeType, string|array $size): \resource|\GdImage|false;
}
