<?php

namespace WpService\Contracts;

interface GetNextCommentsLink
{
    /**
     * Retrieves the link to the next comments page.
     *
     * @since 2.7.1
     *
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @param string $label    Optional. Label for link text. Default empty.
     * @param int $maxPage Optional. Max page. Default 0.
     * @return string|void HTML-formatted link for the next page of comments.
     */
    public function getNextCommentsLink(string $label = '', int $maxPage = 0): mixed;
}
