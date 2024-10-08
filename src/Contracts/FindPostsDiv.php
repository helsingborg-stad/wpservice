<?php

namespace WpService\Contracts;

interface FindPostsDiv
{
    /**
 * Outputs the modal window used for attaching media to posts or pages in the media-listing screen.
 *
 * @since 2.7.0
 *
 * @param string $foundAction Optional. The value of the 'found_action' input field. Default empty string.
 */
    public function findPostsDiv(string $foundAction = ''): void;
}
