<?php

namespace WpService\Contracts;

interface GetCurrentBlogId
{
    /**
 * Retrieves the current site ID.
 *
 * @since 3.1.0
 *
 * @global int $blog_id
 *
 * @return int Site ID.
 */
    public function getCurrentBlogId(): int;
}
