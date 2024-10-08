<?php

namespace WpService\Contracts;

interface CheckCommentFloodDb
{
    /**
     * Hooks WP's native database-based comment-flood check.
     *
     * This wrapper maintains backward compatibility with plugins that expect to
     * be able to unhook the legacy check_comment_flood_db() function from
     * 'check_comment_flood' using remove_action().
     *
     * @since 2.3.0
     * @since 4.7.0 Converted to be an add_filter() wrapper.
     */
    public function checkCommentFloodDb(): void;
}
