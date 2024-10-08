<?php

namespace WpService\Contracts;

interface GetToPing
{
    /**
 * Retrieves URLs that need to be pinged.
 *
 * @since 1.5.0
 * @since 4.7.0 `$post` can be a WP_Post object.
 *
 * @param int|\WP_Post $post Post ID or post object.
 * @return string[]|false List of URLs yet to ping.
 */
    public function getToPing(int|\WP_Post $post): array|false;
}
