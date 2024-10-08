<?php

namespace WpService\Contracts;

interface GetPostTimestamp
{
    /**
 * Retrieves post published or modified time as a Unix timestamp.
 *
 * Note that this function returns a true Unix timestamp, not summed with timezone offset
 * like older WP functions.
 *
 * @since 5.3.0
 *
 * @param int|\WP_Post $post  Optional. Post ID or post object. Default is global `$post` object.
 * @param string $field Optional. Published or modified time to use from database. Accepts 'date' or 'modified'.
 *                           Default 'date'.
 * @return int|false Unix timestamp on success, false on failure.
 */
    public function getPostTimestamp(int|\WP_Post $post, string $field): int|false;
}
