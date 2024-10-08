<?php

namespace WpService\Contracts;

interface WpIsPostAutosave
{
    /**
     * Determines if the specified post is an autosave.
     *
     * @since 2.6.0
     *
     * @param int|\WP_Post $post Post ID or post object.
     * @return int|false ID of autosave's parent on success, false if not a revision.
     */
    public function wpIsPostAutosave(int|\WP_Post $post): int|false;
}
