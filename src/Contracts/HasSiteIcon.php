<?php

namespace WpService\Contracts;

interface HasSiteIcon
{
    /**
 * Determines whether the site has a Site Icon.
 *
 * @since 4.3.0
 *
 * @param int $blogId Optional. ID of the blog in question. Default current blog.
 * @return bool Whether the site has a site icon or not.
 */
    public function hasSiteIcon(int $blogId): bool;
}
