<?php

namespace WpService\Contracts;

interface GetSiteIconUrl
{
    /**
 * Returns the Site Icon URL.
 *
 * @since 4.3.0
 *
 * @param int $size    Optional. Size of the site icon. Default 512 (pixels).
 * @param string $url     Optional. Fallback url if no site icon is found. Default empty.
 * @param int $blogId Optional. ID of the blog to get the site icon for. Default current blog.
 * @return string Site Icon URL.
 */
    public function getSiteIconUrl(int $size = 512, string $url = '', int $blogId = 0): string;
}