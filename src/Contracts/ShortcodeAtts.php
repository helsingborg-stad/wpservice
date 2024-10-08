<?php

namespace WpService\Contracts;

interface ShortcodeAtts
{
    /**
 * Combines user attributes with known attributes and fill in defaults when needed.
 *
 * The pairs should be considered to be all of the attributes which are
 * supported by the caller and given as a list. The returned attributes will
 * only contain the attributes in the $pairs list.
 *
 * If the $atts list has unsupported attributes, then they will be ignored and
 * removed from the final returned list.
 *
 * @since 2.5.0
 *
 * @param array $pairs     Entire list of supported attributes and their defaults.
 * @param array $atts      User defined attributes in shortcode tag.
 * @param string $shortcode Optional. The name of the shortcode, provided for context to enable filtering
 * @return array Combined and filtered attribute list.
 */
    public function shortcodeAtts(array $pairs, array $atts, string $shortcode = ''): array;
}
