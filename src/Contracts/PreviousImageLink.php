<?php

namespace WpService\Contracts;

interface PreviousImageLink
{
    /**
 * Displays previous image link that has the same post parent.
 *
 * @since 2.5.0
 *
 * @param string|int[] $size Optional. Image size. Accepts any registered image size name, or an array
 *                           of width and height values in pixels (in that order). Default 'thumbnail'.
 * @param string|false $text Optional. Link text. Default false.
 */
    public function previousImageLink(string|array $size = 'thumbnail', string|false $text = false): void;
}
