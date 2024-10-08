<?php

namespace WpService\Contracts;

interface UseBlockEditorForPostType
{
    /**
     * Returns whether a post type is compatible with the block editor.
     *
     * The block editor depends on the REST API, and if the post type is not shown in the
     * REST API, then it won't work with the block editor.
     *
     * @since 5.0.0
     * @since 6.1.0 Moved to wp-includes from wp-admin.
     *
     * @param string $postType The post type.
     * @return bool Whether the post type can be edited with the block editor.
     */
    public function useBlockEditorForPostType(string $postType): bool;
}
