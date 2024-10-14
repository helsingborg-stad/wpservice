<?php

namespace WpService\Contracts;

interface GetCommentAuthorRss
{
/**
 * Retrieves the current comment author for use in the feeds.
 *
 * @since 2.0.0
 *
 * @return string Comment Author.
 */
    public function getCommentAuthorRss(): string;
}
