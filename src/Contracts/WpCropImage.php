<?php

namespace WpService\Contracts;

interface WpCropImage
{
    /**
     * Crops an image to a given size.
     *
     * @since 2.1.0
     *
     * @param string|int $src      The source file or Attachment ID.
     * @param int $srcX    The start x position to crop from.
     * @param int $srcY    The start y position to crop from.
     * @param int $srcW    The width to crop.
     * @param int $srcH    The height to crop.
     * @param int $dstW    The destination width.
     * @param int $dstH    The destination height.
     * @param bool|false $srcAbs  Optional. If the source crop points are absolute.
     * @param string|false $dstFile Optional. The destination file to write to.
     * @return string|\WP_Error New filepath on success, WP_Error on failure.
     */
    public function wpCropImage(string|int $src, int $srcX, int $srcY, int $srcW, int $srcH, int $dstW, int $dstH, bool $srcAbs = false, string|false $dstFile = false): string|\WP_Error;
}
