<?php

namespace WpService\Contracts;

interface MediaSideloadImage
{
/**
 * Downloads an image from the specified URL, saves it as an attachment, and optionally attaches it to a post.
 *
 * @since 2.6.0
 * @since 4.2.0 Introduced the `$return_type` parameter.
 * @since 4.8.0 Introduced the 'id' option for the `$return_type` parameter.
 * @since 5.3.0 The `$post_id` parameter was made optional.
 * @since 5.4.0 The original URL of the attachment is stored in the `_source_url`
 *              post meta value.
 * @since 5.8.0 Added 'webp' to the default list of allowed file extensions.
 *
 * @param string $file        The URL of the image to download.
 * @param int $postId     Optional. The post ID the media is to be associated with.
 * @param string $desc        Optional. Description of the image.
 * @param string $returnType Optional. Accepts 'html' (image tag html) or 'src' (URL),
 *                            or 'id' (attachment ID). Default 'html'.
 * @return string|int|\WP_Error Populated HTML img tag, attachment ID, or attachment source
 *                             on success, WP_Error object otherwise.
 */
    public function mediaSideloadImage(string $file, int $postId = 0, string $desc = null, string $returnType = 'html'): string|int|\WP_Error;
}
