<?php

namespace WpService\Contracts;

interface RefreshBlogDetails
{
    /**
     * Clears the blog details cache.
     *
     * @since MU (3.0.0)
     *
     * @param int $blogId Optional. Blog ID. Defaults to current blog.
     */
    public function refreshBlogDetails(int $blogId = 0): void;
}
