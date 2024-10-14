<?php

namespace WpService\Contracts;

interface ShortcodeParseAtts
{
/**
 * Retrieves all attributes from the shortcodes tag.
 *
 * The attributes list has the attribute name as the key and the value of the
 * attribute as the value in the key/value pair. This allows for easier
 * retrieval of the attributes, since all attributes have to be known.
 *
 * @since 2.5.0
 * @since 6.5.0 The function now always returns an array,
 *              even if the original arguments string cannot be parsed or is empty.
 *
 * @param string $text Shortcode arguments list.
 * @return array Array of attribute values keyed by attribute name.
 *               Returns empty array if there are no attributes
 *               or if the original arguments string cannot be parsed.
 */
    public function shortcodeParseAtts(string $text): array;
}
