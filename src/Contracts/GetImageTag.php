<?php

namespace WpService\Contracts;

interface GetImageTag
{
    /**
 * Gets an img tag for an image attachment, scaling it down if requested.
 *
 * The {@see 'get_image_tag_class'} filter allows for changing the class name for the
 * image without having to use regular expressions on the HTML content. The
 * parameters are: what WordPress will use for the class, the Attachment ID,
 * image align value, and the size the image should be.
 *
 * The second filter, {@see 'get_image_tag'}, has the HTML content, which can then be
 * further manipulated by a plugin to change all attribute values and even HTML
 * content.
 *
 * @since 2.5.0
 *
 * @param int $id    Attachment ID.
 * @param string $alt   Image description for the alt attribute.
 * @param string $title Image description for the title attribute.
 * @param string $align Part of the class name for aligning the image.
 * @param string|int[] $size  Optional. Image size. Accepts any registered image size name, or an array of
 *                            width and height values in pixels (in that order). Default 'medium'.
 * @return string HTML IMG element for given image attachment.
 */
    public function getImageTag(int $id, string $alt, string $title, string $align, string|array $size = 'medium'): string;
}
