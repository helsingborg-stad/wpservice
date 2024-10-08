<?php

namespace WpService\Contracts;

interface GetBlogPermalink
{
    /**
     * Gets the permalink for a post on another blog.
     *
     * @since MU (3.0.0) 1.0
     *
     * @param int $blogId ID of the source blog.
     * @param int $postId ID of the desired post.
     * @return string The post's permalink.
     */
    public function getBlogPermalink(int $blogId, int $postId): string;
}
