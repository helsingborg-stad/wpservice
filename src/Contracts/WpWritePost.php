<?php

namespace WpService\Contracts;

interface WpWritePost
{
    /**
 * Creates a new post from the "Write Post" form using `$_POST` information.
 *
 * @since 2.1.0
 *
 * @global WP_User $current_user
 *
 * @return int|\WP_Error Post ID on success, WP_Error on failure.
 */
    public function wpWritePost(): int|\WP_Error;
}
