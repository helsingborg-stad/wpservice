<?php

namespace WpService\Contracts;

interface CommentsLinkFeed
{
    /**
 * Outputs the link to the comments for the current post in an XML safe way.
 *
 * @since 3.0.0
 */
    public function commentsLinkFeed(): void;
}
