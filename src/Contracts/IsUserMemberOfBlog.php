<?php

namespace WpService\Contracts;

interface IsUserMemberOfBlog
{
    /**
     * Finds out whether a user is a member of a given blog.
     *
     * @since MU (3.0.0)
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $userId Optional. The unique ID of the user. Defaults to the current user.
     * @param int $blogId Optional. ID of the blog to check. Defaults to the current site.
     * @return bool
     */
    public function isUserMemberOfBlog(int $userId, int $blogId): bool;
}
