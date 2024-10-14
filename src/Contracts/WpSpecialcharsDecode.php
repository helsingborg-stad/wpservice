<?php

namespace WpService\Contracts;

interface WpSpecialcharsDecode
{
/**
 * Converts a number of HTML entities into their special characters.
 *
 * Specifically deals with: `&`, `<`, `>`, `"`, and `'`.
 *
 * `$quote_style` can be set to ENT_COMPAT to decode `"` entities,
 * or ENT_QUOTES to do both `"` and `'`. Default is ENT_NOQUOTES where no quotes are decoded.
 *
 * @since 2.8.0
 *
 * @param string $text        The text which is to be decoded.
 * @param string|int $quoteStyle Optional. Converts double quotes if set to ENT_COMPAT,
 *                                both single and double if set to ENT_QUOTES or
 *                                none if set to ENT_NOQUOTES.
 *                                Also compatible with old _wp_specialchars() values;
 *                                converting single quotes if set to 'single',
 *                                double if set to 'double' or both if otherwise set.
 *                                Default is ENT_NOQUOTES.
 * @return string The decoded text without HTML entities.
 */
    public function wpSpecialcharsDecode(string $text, string|int $quoteStyle = ENT_NOQUOTES): string;
}
