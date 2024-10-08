<?php

namespace WpService\Contracts;

interface WpCountPosts
{
    /**
 * Counts number of posts of a post type and if user has permissions to view.
 *
 * This function provides an efficient method of finding the amount of post's
 * type a blog has. Another method is to count the amount of items in
 * get_posts(), but that method has a lot of overhead with doing so. Therefore,
 * when developing for 2.5+, use this function instead.
 *
 * The $perm parameter checks for 'readable' value and if the user can read
 * private posts, it will display that for the user that is signed in.
 *
 * @since 2.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $type Optional. Post type to retrieve count. Default 'post'.
 * @param string $perm Optional. 'readable' or empty. Default empty.
 * @return \stdClass An object containing the number of posts for each status,
 *                  or an empty object if the post type does not exist.
 */
    public function wpCountPosts(string $type = 'post', string $perm = ''): \stdClass;
}
