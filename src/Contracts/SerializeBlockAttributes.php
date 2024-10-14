<?php

namespace WpService\Contracts;

interface SerializeBlockAttributes
{
/**
 * Given an array of attributes, returns a string in the serialized attributes
 * format prepared for post content.
 *
 * The serialized result is a JSON-encoded string, with unicode escape sequence
 * substitution for characters which might otherwise interfere with embedding
 * the result in an HTML comment.
 *
 * This function must produce output that remains in sync with the output of
 * the serializeAttributes JavaScript function in the block editor in order
 * to ensure consistent operation between PHP and JavaScript.
 *
 * @since 5.3.1
 *
 * @param array $blockAttributes Attributes object.
 * @return string Serialized attributes.
 */
    public function serializeBlockAttributes(array $blockAttributes): string;
}
