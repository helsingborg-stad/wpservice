<?php

namespace WpService\Contracts;

interface GetPreviousPostsLink
{
    /**
 * Retrieves the previous posts page link.
 *
 * @since 2.7.0
 *
 * @global int $paged
 *
 * @param string $label Optional. Previous page link text.
 * @return string|void HTML-formatted previous page link.
 */
    public function getPreviousPostsLink(string $label): string;
}
