<?php

namespace WpService\Contracts;

interface PermalinkAnchor
{
/**
 * Displays the permalink anchor for the current post.
 *
 * The permalink mode title will use the post title for the 'a' element 'id'
 * attribute. The id mode uses 'post-' with the post ID for the 'id' attribute.
 *
 * @since 0.71
 *
 * @param string $mode Optional. Permalink mode. Accepts 'title' or 'id'. Default 'id'.
 */
    public function permalinkAnchor(string $mode = 'id'): void;
}
