<?php

namespace WpService\Contracts;

interface AttachmentUrlToPostid
{
    /**
     * Tries to convert an attachment URL into a post ID.
     *
     * @since 4.0.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $url The URL to resolve.
     * @return int The found post ID, or 0 on failure.
     */
    public function attachmentUrlToPostid(string $url): int;
}
