<?php

namespace WpService\Contracts;

interface WpCheckInvalidUtf8
{
/**
 * Checks for invalid UTF8 in a string.
 *
 * Note! This function only performs its work if the `blog_charset` is set
 * to UTF-8. For all other values it returns the input text unchanged.
 *
 * Note! Unless requested, this returns an empty string if the input contains
 * any sequences of invalid UTF-8. To replace invalid byte sequences, pass
 * `true` as the optional `$strip` parameter.
 *
 * Consider using {@see wp_scrub_utf8()} instead which does not depend on
 * the value of `blog_charset`.
 *
 * Example:
 *
 *     // The `blog_charset` is `latin1`, so this returns the input unchanged.
 *     $every_possible_input === wp_check_invalid_utf8( $every_possible_input );
 *
 *     // Valid strings come through unchanged.
 *     'test' === wp_check_invalid_utf8( 'test' );
 *
 *     $invalid = "the byte \xC0 is never allowed in a UTF-8 string.";
 *
 *     // Invalid strings are rejected outright.
 *     '' === wp_check_invalid_utf8( $invalid );
 *
 *     // “Stripping” invalid sequences produces the replacement character instead.
 *     "the byte \u{FFFD} is never allowed in a UTF-8 string." === wp_check_invalid_utf8( $invalid, true );
 *     'the byte � is never allowed in a UTF-8 string.' === wp_check_invalid_utf8( $invalid, true );
 *
 * @since 2.8.0
 * @since 6.9.0 Stripping replaces invalid byte sequences with the Unicode replacement character U+FFFD (�).
 *
 * @param string $text   String which is expected to be encoded as UTF-8 unless `blog_charset` is another encoding.
 * @param bool $strip  Optional. Whether to replace invalid sequences of bytes with the Unicode replacement
 *                       character (U+FFFD `�`). Default `false` returns an empty string for invalid UTF-8 inputs.
 * @return string The checked text.
 */
    public function wpCheckInvalidUtf8(string $text, bool $strip = false): string;
}
