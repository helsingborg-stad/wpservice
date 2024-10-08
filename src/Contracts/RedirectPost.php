<?php

namespace WpService\Contracts;

interface RedirectPost
{
    /**
 * Redirects to previous page.
 *
 * @since 2.7.0
 *
 * @param int $postId Optional. Post ID.
 */
    public function redirectPost(int|string $postId = ''): void;
}
