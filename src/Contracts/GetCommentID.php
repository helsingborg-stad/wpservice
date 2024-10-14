<?php

namespace WpService\Contracts;

interface GetCommentID
{
/**
 * Retrieves the comment ID of the current comment.
 *
 * @since 1.5.0
 *
 * @return string The comment ID as a numeric string.
 */
    public function getCommentID(): string;
}
