<?php

namespace WpService\Contracts;

interface AddPostMeta
{
/**
 * Adds a meta field to the given post.
 *
 * Post meta data is called "Custom Fields" on the Administration Screen.
 *
 * For historical reasons both the meta key and the meta value are expected to be "slashed" (slashes escaped) on input.
 *
 * @since 1.5.0
 *
 * @param int $postId    Post ID.
 * @param string $metaKey   Metadata name.
 * @param mixed $metaValue Metadata value. Arrays and objects are stored as serialized data and
 *                           will be returned as the same type when retrieved. Other data types will
 *                           be stored as strings in the database:
 *                           - false is stored and retrieved as an empty string ('')
 *                           - true is stored and retrieved as '1'
 *                           - numbers (both integer and float) are stored and retrieved as strings
 *                           Must be serializable if non-scalar.
 * @param bool $unique     Optional. Whether the same key should not be added.
 *                           Default false.
 * @return int|false Meta ID on success, false on failure.
 */
    public function addPostMeta(int $postId, string $metaKey, mixed $metaValue, bool $unique = false): int|false;
}
