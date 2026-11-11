<?php

namespace WpService\Contracts;

interface GetOembedResponseData
{
/**
 * Retrieves the oEmbed response data for a given post.
 *
 * @since 4.4.0
 * @since 6.8.0 Output was adjusted to only embed if the post type supports it.
 *
 * @param \WP_Post|int $post  Post ID or post object.
 * @param int $width The requested width.
 * @return array|false Response data on success, false if post doesn't exist,
 *                     is not publicly viewable or post type is not embeddable.
 */
    public function getOembedResponseData(\WP_Post|int $post, int $width): array|false;
}
