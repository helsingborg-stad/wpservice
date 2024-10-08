<?php

namespace WpService\Contracts;

interface GetOembedResponseData
{
    /**
 * Retrieves the oEmbed response data for a given post.
 *
 * @since 4.4.0
 *
 * @param \WP_Post|int $post  Post ID or post object.
 * @param int $width The requested width.
 * @return array|false Response data on success, false if post doesn't exist
 *                     or is not publicly viewable.
 */
    public function getOembedResponseData(\WP_Post|int $post, int $width): array|false;
}
