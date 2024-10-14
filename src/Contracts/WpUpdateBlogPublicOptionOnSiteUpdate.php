<?php

namespace WpService\Contracts;

interface WpUpdateBlogPublicOptionOnSiteUpdate
{
/**
 * Updates the `blog_public` option for a given site ID.
 *
 * @since 5.1.0
 *
 * @param int $siteId   Site ID.
 * @param string $isPublic Whether the site is public. A numeric string,
 *                          for compatibility reasons. Accepts '1' or '0'.
 */
    public function wpUpdateBlogPublicOptionOnSiteUpdate(int $siteId, string $isPublic): void;
}
