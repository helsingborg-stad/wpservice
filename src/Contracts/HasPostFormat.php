<?php

namespace WpService\Contracts;

interface HasPostFormat
{
    /**
 * Check if a post has any of the given formats, or any format.
 *
 * @since 3.1.0
 *
 * @param string|string[] $format Optional. The format or formats to check. Default empty array.
 * @param \WP_Post|int|null $post   Optional. The post to check. Defaults to the current post in the loop.
 * @return bool True if the post has any of the given formats (or any format, if no format specified),
 *              false otherwise.
 */
    public function hasPostFormat(string|array $format, \WP_Post|int|null $post): bool;
}
