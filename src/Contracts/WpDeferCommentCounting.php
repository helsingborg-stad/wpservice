<?php

namespace WpService\Contracts;

interface WpDeferCommentCounting
{
    /**
 * Determines whether to defer comment counting.
 *
 * When setting $defer to true, all post comment counts will not be updated
 * until $defer is set to false. When $defer is set to false, then all
 * previously deferred updated post comment counts will then be automatically
 * updated without having to call wp_update_comment_count() after.
 *
 * @since 2.5.0
 *
 * @param bool $defer
 * @return bool
 */
    public function wpDeferCommentCounting(bool $defer): bool;
}
