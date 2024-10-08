<?php

namespace WpService\Contracts;

interface UpdatePostsCount
{
    /**
     * Updates a blog's post count.
     *
     * WordPress MS stores a blog's post count as an option so as
     * to avoid extraneous COUNTs when a blog's details are fetched
     * with get_site(). This function is called when posts are published
     * or unpublished to make sure the count stays current.
     *
     * @since MU (3.0.0)
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $deprecated Not used.
     */
    public function updatePostsCount(string $deprecated = ''): void;
}
