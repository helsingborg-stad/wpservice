<?php

namespace WpService\Contracts;

interface AddCommentMeta
{
/**
 * Adds meta data field to a comment.
 *
 * For historical reasons both the meta key and the meta value are expected to be "slashed" (slashes escaped) on input.
 *
 * @since 2.9.0
 *
 * @link https://developer.wordpress.org/reference/functions/add_comment_meta/
 *
 * @param int $commentId Comment ID.
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
    public function addCommentMeta(int $commentId, string $metaKey, mixed $metaValue, bool $unique = false): int|false;
}
