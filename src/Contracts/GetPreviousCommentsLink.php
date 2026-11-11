<?php

namespace WpService\Contracts;

interface GetPreviousCommentsLink
{
/**
 * Retrieves the link to the previous comments page.
 *
 * @since 2.7.1
 * @since 6.7.0 Added the `page` parameter.
 *
 * @param string $label Optional. Label for comments link text. Default empty.
 * @param int|null $page  Optional. Page number. Default null.
 * @return string|void HTML-formatted link for the previous page of comments.
 */
    public function getPreviousCommentsLink(string $label = '', int|null $page = null): mixed;
}
