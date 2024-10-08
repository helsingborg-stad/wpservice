<?php

namespace WpService\Contracts;

interface GetNextPostsPageLink
{
    /**
 * Retrieves the next posts page link.
 *
 * Backported from 2.1.3 to 2.0.10.
 *
 * @since 2.0.10
 *
 * @global int $paged
 *
 * @param int $maxPage Optional. Max pages. Default 0.
 * @return string|void The link URL for next posts page.
 */
    public function getNextPostsPageLink(int $maxPage = 0): string;
}
