<?php

namespace WpService\Contracts;

interface GetTheAuthorPostsLink
{
    /**
     * Retrieves an HTML link to the author page of the current post's author.
     *
     * Returns an HTML-formatted link using get_author_posts_url().
     *
     * @since 4.4.0
     *
     * @global WP_User $authordata The current author's data.
     *
     * @return string An HTML link to the author page, or an empty string if $authordata is not set.
     */
    public function getTheAuthorPostsLink(): string;
}
