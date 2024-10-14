<?php

namespace WpService\Contracts;

interface GetBlogPost
{
/**
 * Gets a blog post from any site on the network.
 *
 * This function is similar to get_post(), except that it can retrieve a post
 * from any site on the network, not just the current site.
 *
 * @since MU (3.0.0)
 *
 * @param int $blogId ID of the blog.
 * @param int $postId ID of the post being looked for.
 * @return \WP_Post|null WP_Post object on success, null on failure
 */
    public function getBlogPost(int $blogId, int $postId): \WP_Post|null;
}
