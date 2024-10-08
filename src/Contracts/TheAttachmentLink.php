<?php

namespace WpService\Contracts;

interface TheAttachmentLink
{
    /**
 * Displays an attachment page link using an image or icon.
 *
 * @since 2.0.0
 *
 * @param int|\WP_Post $post       Optional. Post ID or post object.
 * @param bool $fullsize   Optional. Whether to use full size. Default false.
 * @param bool $deprecated Deprecated. Not used.
 * @param bool $permalink Optional. Whether to include permalink. Default false.
 */
    public function theAttachmentLink(int|\WP_Post $post, bool $fullsize, bool $deprecated, bool $permalink): void;
}
