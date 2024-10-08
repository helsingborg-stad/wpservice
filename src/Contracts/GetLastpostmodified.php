<?php

namespace WpService\Contracts;

interface GetLastpostmodified
{
    /**
     * Gets the most recent time that a post on the site was modified.
     *
     * The server timezone is the default and is the difference between GMT and
     * server time. The 'blog' value is just when the last post was modified.
     * The 'gmt' is when the last post was modified in GMT time.
     *
     * @since 1.2.0
     * @since 4.4.0 The `$post_type` argument was added.
     *
     * @param string $timezone  Optional. The timezone for the timestamp. See get_lastpostdate()
     *                          for information on accepted values.
     *                          Default 'server'.
     * @param string $postType Optional. The post type to check. Default 'any'.
     * @return string The timestamp in 'Y-m-d H:i:s' format, or false on failure.
     */
    public function getLastpostmodified(string $timezone = 'server', string $postType = 'any'): string;
}
