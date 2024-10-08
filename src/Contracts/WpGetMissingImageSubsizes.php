<?php

namespace WpService\Contracts;

interface WpGetMissingImageSubsizes
{
    /**
 * Compare the existing image sub-sizes (as saved in the attachment meta)
 * to the currently registered image sub-sizes, and return the difference.
 *
 * Registered sub-sizes that are larger than the image are skipped.
 *
 * @since 5.3.0
 *
 * @param int $attachmentId The image attachment post ID.
 * @return array[] Associative array of arrays of image sub-size information for
 *                 missing image sizes, keyed by image size name.
 */
    public function wpGetMissingImageSubsizes(int $attachmentId): array;
}
