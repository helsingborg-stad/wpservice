<?php

namespace WpService\Contracts;

interface RssEnclosure
{
    /**
     * Displays the rss enclosure for the current post.
     *
     * Uses the global $post to check whether the post requires a password and if
     * the user has the password for the post. If not then it will return before
     * displaying.
     *
     * Also uses the function get_post_custom() to get the post's 'enclosure'
     * metadata field and parses the value to display the enclosure(s). The
     * enclosure(s) consist of enclosure HTML tag(s) with a URI and other
     * attributes.
     *
     * @since 1.5.0
     */
    public function rssEnclosure(): void;
}
