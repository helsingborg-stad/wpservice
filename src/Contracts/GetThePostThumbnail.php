<?php

namespace WpService\Contracts;

interface GetThePostThumbnail
{
/**
 * Retrieves the post thumbnail.
 *
 * When a theme adds 'post-thumbnail' support, a special 'post-thumbnail' image size
 * is registered, which differs from the 'thumbnail' image size managed via the
 * Settings > Media screen.
 *
 * When using the_post_thumbnail() or related functions, the 'post-thumbnail' image
 * size is used by default, though a different size can be specified instead as needed.
 *
 * @since 2.9.0
 * @since 4.4.0 `$post` can be a post ID or WP_Post object.
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object.  Default is global `$post`.
 * @param string|int[] $size Optional. Image size. Accepts any registered image size name, or an array of
 *                           width and height values in pixels (in that order). Default 'post-thumbnail'.
 * @param string|array $attr Optional. Query string or array of attributes. Default empty.
 * @return string The post thumbnail image tag.
 */
    public function getThePostThumbnail(int|\WP_Post $post = null, string|array $size = 'post-thumbnail', string|array $attr = ''): string;
}
