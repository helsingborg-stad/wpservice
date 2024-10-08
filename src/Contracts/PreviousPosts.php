<?php

namespace WpService\Contracts;

interface PreviousPosts
{
    /**
 * Displays or retrieves the previous posts page link.
 *
 * @since 0.71
 *
 * @param bool $display Optional. Whether to echo the link. Default true.
 * @return string|void The previous posts page link if `$display = false`.
 */
    public function previousPosts(bool $display = true): mixed;
}
