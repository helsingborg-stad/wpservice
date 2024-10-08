<?php

namespace WpService\Contracts;

interface GetImageSendToEditor
{
    /**
 * Retrieves the image HTML to send to the editor.
 *
 * @since 2.5.0
 *
 * @param int $id      Image attachment ID.
 * @param string $caption Image caption.
 * @param string $title   Image title attribute.
 * @param string $align   Image CSS alignment property.
 * @param string $url     Optional. Image src URL. Default empty.
 * @param bool|string $rel     Optional. Value for rel attribute or whether to add a default value. Default false.
 * @param string|int[] $size    Optional. Image size. Accepts any registered image size name, or an array of
 *                              width and height values in pixels (in that order). Default 'medium'.
 * @param string $alt     Optional. Image alt attribute. Default empty.
 * @return string The HTML output to insert into the editor.
 */
    public function getImageSendToEditor(int $id, string $caption, string $title, string $align, string $url, bool|string $rel, string|array $size, string $alt): string;
}
