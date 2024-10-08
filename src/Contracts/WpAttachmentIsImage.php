<?php

namespace WpService\Contracts;

interface WpAttachmentIsImage
{
    /**
 * Determines whether an attachment is an image.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.1.0
 * @since 4.2.0 Modified into wrapper for wp_attachment_is() and
 *              allowed WP_Post object to be passed.
 *
 * @param int|\WP_Post $post Optional. Attachment ID or object. Default is global $post.
 * @return bool Whether the attachment is an image.
 */
    public function wpAttachmentIsImage(int|\WP_Post $post): bool;
}
