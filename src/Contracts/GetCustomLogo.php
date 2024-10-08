<?php

namespace WpService\Contracts;

interface GetCustomLogo
{
    /**
 * Returns a custom logo, linked to home unless the theme supports removing the link on the home page.
 *
 * @since 4.5.0
 * @since 5.5.0 Added option to remove the link on the home page with `unlink-homepage-logo` theme support
 *              for the `custom-logo` theme feature.
 * @since 5.5.1 Disabled lazy-loading by default.
 *
 * @param int $blogId Optional. ID of the blog in question. Default is the ID of the current blog.
 * @return string Custom logo markup.
 */
    public function getCustomLogo(int $blogId = 0): string;
}
