<?php

namespace WpService\Contracts;

interface AvoidBlogPagePermalinkCollision
{
    /**
 * Avoids a collision between a site slug and a permalink slug.
 *
 * In a subdirectory installation this will make sure that a site and a post do not use the
 * same subdirectory by checking for a site with the same name as a new post.
 *
 * @since 3.0.0
 *
 * @param array $data    An array of post data.
 * @param array $postarr An array of posts. Not currently used.
 * @return array The new array of post data after checking for collisions.
 */
    public function avoidBlogPagePermalinkCollision(array $data, array $postarr): array;
}
