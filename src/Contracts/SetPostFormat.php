<?php

namespace WpService\Contracts;

interface SetPostFormat
{
    /**
     * Assign a format to a post
     *
     * @since 3.1.0
     *
     * @param int|\WP_Post $post   The post for which to assign a format.
     * @param string $format A format to assign. Use an empty string or array to remove all formats from the post.
     * @return array|\WP_Error|false Array of affected term IDs on success. WP_Error on error.
     */
    public function setPostFormat(int|\WP_Post $post, string $format): array|\WP_Error|false;
}
