<?php

namespace WpService\Contracts;

interface StickPost
{
/**
 * Makes a post sticky.
 *
 * Sticky posts should be displayed at the top of the front page.
 *
 * @since 2.7.0
 *
 * @param int $postId Post ID.
 */
    public function stickPost(int $postId): void;
}
