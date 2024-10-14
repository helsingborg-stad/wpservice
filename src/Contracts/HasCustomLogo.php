<?php

namespace WpService\Contracts;

interface HasCustomLogo
{
/**
 * Determines whether the site has a custom logo.
 *
 * @since 4.5.0
 *
 * @param int $blogId Optional. ID of the blog in question. Default is the ID of the current blog.
 * @return bool Whether the site has a custom logo or not.
 */
    public function hasCustomLogo(int $blogId = 0): bool;
}
