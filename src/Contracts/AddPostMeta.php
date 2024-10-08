<?php

namespace WpService\Contracts;

interface AddPostMeta
{
    /**
     * Adds a meta field to the given post.
     *
     * Post meta data is called "Custom Fields" on the Administration Screen.
     *
     * @since 1.5.0
     *
     * @param int $postId    Post ID.
     * @param string $metaKey   Metadata name.
     * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
     * @param bool $unique     Optional. Whether the same key should not be added.
     *                           Default false.
     * @return int|false Meta ID on success, false on failure.
     */
    public function addPostMeta(int $postId, string $metaKey, mixed $metaValue, bool $unique = false): int|false;
}
