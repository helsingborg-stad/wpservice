<?php

namespace WpService\Contracts;

interface PreviousPostsLink
{
    /**
 * Displays the previous posts page link.
 *
 * @since 0.71
 *
 * @param string $label Optional. Previous page link text.
 */
    public function previousPostsLink(string $label = null): void;
}
