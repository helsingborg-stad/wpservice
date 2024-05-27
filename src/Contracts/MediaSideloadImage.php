<?php

namespace WpService\Contracts;

use WP_Error;

interface MediaSideloadImage
{
    /**
     * Downloads an image from the specified URL, saves it as an attachment, and optionally attaches it to a post.
     *
     * @param string $file        The URL of the image to download.
     * @param int    $postId     Optional. The post ID the media is to be associated with.
     * @param string $desc        Optional. Description of the image.
     * @param string $returnType Optional. Accepts 'html' (image tag html) or 'src' (URL),
     *                            or 'id' (attachment ID). Default 'html'.
     * @return string|int|WP_Error Populated HTML img tag, attachment ID, or attachment source
     *                             on success, WP_Error object otherwise.
     */
    public function mediaSideloadImage($file, $postId = 0, $desc = null, $returnType = 'html'): string|int|WP_Error;
}
