<?php

namespace WpService\Contracts;

interface CommentFooterDie
{
/**
 * Displays error message at bottom of comments.
 *
 * @since 2.5.0
 *
 * @param string $msg Error Message. Assumed to contain HTML and be sanitized.
 */
    public function commentFooterDie(string $msg): void;
}
