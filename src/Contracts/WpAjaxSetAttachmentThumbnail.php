<?php

namespace WpService\Contracts;

interface WpAjaxSetAttachmentThumbnail
{
    /**
 * Handles setting the featured image for an attachment via AJAX.
 *
 * @since 4.0.0
 *
 * @see set_post_thumbnail()
 */
    public function wpAjaxSetAttachmentThumbnail(): void;
}
