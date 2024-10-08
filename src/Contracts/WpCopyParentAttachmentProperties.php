<?php

namespace WpService\Contracts;

interface WpCopyParentAttachmentProperties
{
    /**
 * Copy parent attachment properties to newly cropped image.
 *
 * @since 6.5.0
 *
 * @param string $cropped              Path to the cropped image file.
 * @param int $parentAttachmentId Parent file Attachment ID.
 * @param string $context              Control calling the function.
 * @return array Properties of attachment.
 */
    public function wpCopyParentAttachmentProperties(string $cropped, int $parentAttachmentId, string $context): array;
}
