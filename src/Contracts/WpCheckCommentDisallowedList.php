<?php

namespace WpService\Contracts;

interface WpCheckCommentDisallowedList
{
/**
 * Checks if a comment contains disallowed characters or words.
 *
 * @since 5.5.0
 *
 * @param string $author The author of the comment
 * @param string $email The email of the comment
 * @param string $url The url used in the comment
 * @param string $comment The comment content
 * @param string $userIp The comment author's IP address
 * @param string $userAgent The author's browser user agent
 * @return bool True if comment contains disallowed content, false if comment does not
 */
    public function wpCheckCommentDisallowedList(string $author, string $email, string $url, string $comment, string $userIp, string $userAgent): bool;
}
