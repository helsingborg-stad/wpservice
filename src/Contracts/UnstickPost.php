<?php

namespace WpService\Contracts;

interface UnstickPost
{
    /**
 * Un-sticks a post.
 *
 * Sticky posts should be displayed at the top of the front page.
 *
 * @since 2.7.0
 *
 * @param int $postId Post ID.
 */
    public function unstickPost(int $postId): void;
}
