<?php

namespace WpService\Contracts;

interface GetBlogaddressById
{
    /**
     * Gets a full site URL, given a site ID.
     *
     * @since MU (3.0.0)
     *
     * @param int $blogId Site ID.
     * @return string Full site URL if found. Empty string if not.
     */
    public function getBlogaddressById(int $blogId): string;
}
