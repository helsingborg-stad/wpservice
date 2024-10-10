<?php

namespace WpService\Contracts;

interface GetAttachedMedia
{
    /**
     * Retrieves media attached to the passed post.
     *
     * @since 3.6.0
     *
     * @param string $type Mime type.
     * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
     * @return WP_Post[] Array of media attached to the given post.
     */
    public function getAttachedMedia(string $type, int|\WP_Post $post): array;
}
