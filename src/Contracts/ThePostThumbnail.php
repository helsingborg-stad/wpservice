<?php

namespace WpService\Contracts;

interface ThePostThumbnail
{
    /**
     * Displays the post thumbnail.
     *
     * When a theme adds 'post-thumbnail' support, a special 'post-thumbnail' image size
     * is registered, which differs from the 'thumbnail' image size managed via the
     * Settings > Media screen.
     *
     * When using the_post_thumbnail() or related functions, the 'post-thumbnail' image
     * size is used by default, though a different size can be specified instead as needed.
     *
     * @since 2.9.0
     *
     * @see get_the_post_thumbnail()
     *
     * @param string|int[] $size Optional. Image size. Accepts any registered image size name, or an array of
     *                           width and height values in pixels (in that order). Default 'post-thumbnail'.
     * @param string|array $attr Optional. Query string or array of attributes. Default empty.
     */
    public function thePostThumbnail(string|array $size = 'post-thumbnail', string|array $attr = ''): void;
}
