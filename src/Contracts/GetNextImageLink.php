<?php

namespace WpService\Contracts;

interface GetNextImageLink
{
/**
 * Gets the next image link that has the same post parent.
 *
 * @since 5.8.0
 *
 * @see get_adjacent_image_link()
 *
 * @param string|int[] $size Optional. Image size. Accepts any registered image size name, or an array
 *                           of width and height values in pixels (in that order). Default 'thumbnail'.
 * @param string|false $text Optional. Link text. Default false.
 * @return string Markup for next image link.
 */
    public function getNextImageLink(string|array $size = 'thumbnail', string|false $text = false): string;
}
