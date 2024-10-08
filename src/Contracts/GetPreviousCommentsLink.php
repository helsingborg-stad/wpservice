<?php

namespace WpService\Contracts;

interface GetPreviousCommentsLink
{
    /**
 * Retrieves the link to the previous comments page.
 *
 * @since 2.7.1
 *
 * @param string $label Optional. Label for comments link text. Default empty.
 * @return string|void HTML-formatted link for the previous page of comments.
 */
    public function getPreviousCommentsLink(string $label): string;
}
