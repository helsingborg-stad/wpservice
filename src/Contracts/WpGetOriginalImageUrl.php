<?php

namespace WpService\Contracts;

interface WpGetOriginalImageUrl
{
    /**
     * Retrieves the URL to an original attachment image.
     *
     * Similar to `wp_get_attachment_url()` however some images may have been
     * processed after uploading. In this case this function returns the URL
     * to the originally uploaded image file.
     *
     * @since 5.3.0
     *
     * @param int $attachmentId Attachment post ID.
     * @return string|false Attachment image URL, false on error or if the attachment is not an image.
     */
    public function wpGetOriginalImageUrl(int $attachmentId): string|false;
}
