<?php

namespace WpService\Contracts;

interface GetLastpostdate
{
    /**
 * Retrieves the most recent time that a post on the site was published.
 *
 * The server timezone is the default and is the difference between GMT and
 * server time. The 'blog' value is the date when the last post was posted.
 * The 'gmt' is when the last post was posted in GMT formatted date.
 *
 * @since 0.71
 * @since 4.4.0 The `$post_type` argument was added.
 *
 * @param string $timezone  Optional. The timezone for the timestamp. Accepts 'server', 'blog', or 'gmt'.
 *                          'server' uses the server's internal timezone.
 *                          'blog' uses the `post_date` field, which proxies to the timezone set for the site.
 *                          'gmt' uses the `post_date_gmt` field.
 *                          Default 'server'.
 * @param string $postType Optional. The post type to check. Default 'any'.
 * @return string The date of the last post, or false on failure.
 */
    public function getLastpostdate(string $timezone, string $postType): string;
}
