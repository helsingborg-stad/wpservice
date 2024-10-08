<?php

namespace WpService\Contracts;

interface NextPosts
{
    /**
 * Displays or retrieves the next posts page link.
 *
 * @since 0.71
 *
 * @param int $maxPage Optional. Max pages. Default 0.
 * @param bool $display  Optional. Whether to echo the link. Default true.
 * @return string|void The link URL for next posts page if `$display = false`.
 */
    public function nextPosts(int $maxPage = 0, bool $display = true): mixed;
}
