<?php

namespace WpService\Contracts;

interface GetBlogaddressByName
{
/**
 * Gets a full site URL, given a site name.
 *
 * @since MU (3.0.0)
 *
 * @param string $blogname Name of the subdomain or directory.
 * @return string
 */
    public function getBlogaddressByName(string $blogname): string;
}
