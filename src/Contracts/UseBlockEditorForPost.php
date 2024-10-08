<?php

namespace WpService\Contracts;

interface UseBlockEditorForPost
{
    /**
     * Returns whether the post can be edited in the block editor.
     *
     * @since 5.0.0
     * @since 6.1.0 Moved to wp-includes from wp-admin.
     *
     * @param int|\WP_Post $post Post ID or WP_Post object.
     * @return bool Whether the post can be edited in the block editor.
     */
    public function useBlockEditorForPost(int|\WP_Post $post): bool;
}
