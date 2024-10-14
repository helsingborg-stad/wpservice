<?php

namespace WpService\Contracts;

interface GetTheAuthorPosts
{
/**
 * Retrieves the number of posts by the author of the current post.
 *
 * @since 1.5.0
 *
 * @return int The number of posts by the author.
 */
    public function getTheAuthorPosts(): int;
}
