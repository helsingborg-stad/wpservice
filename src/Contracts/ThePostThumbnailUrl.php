<?php

namespace WpService\Contracts;

interface ThePostThumbnailUrl
{
/**
 * Displays the post thumbnail URL.
 *
 * @since 4.4.0
 *
 * @param string|int[] $size Optional. Image size to use. Accepts any valid image size,
 *                           or an array of width and height values in pixels (in that order).
 *                           Default 'post-thumbnail'.
 */
    public function thePostThumbnailUrl(string|array $size = 'post-thumbnail'): void;
}
