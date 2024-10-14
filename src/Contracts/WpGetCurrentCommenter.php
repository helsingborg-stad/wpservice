<?php

namespace WpService\Contracts;

interface WpGetCurrentCommenter
{
/**
 * Gets current commenter's name, email, and URL.
 *
 * Expects cookies content to already be sanitized. User of this function might
 * wish to recheck the returned array for validity.
 *
 * @see sanitize_comment_cookies() Use to sanitize cookies
 *
 * @since 2.0.4
 *
 * @return array {
 *     An array of current commenter variables.
 *
 * @type string $comment_author       The name of the current commenter, or an empty string.
 * @type string $comment_author_email The email address of the current commenter, or an empty string.
 * @type string $comment_author_url   The URL address of the current commenter, or an empty string.
 * }
 */
    public function wpGetCurrentCommenter(): array;
}
