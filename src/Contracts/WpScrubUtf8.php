<?php

namespace WpService\Contracts;

interface WpScrubUtf8
{
/**
 * Replaces ill-formed UTF-8 byte sequences with the Unicode Replacement Character.
 *
 * Knowing what to do in the presence of text encoding issues can be complicated.
 * This function replaces invalid spans of bytes to neutralize any corruption that
 * may be there and prevent it from causing further problems downstream.
 *
 * However, it’s not always ideal to replace those bytes. In some settings it may
 * be best to leave the invalid bytes in the string so that downstream code can handle
 * them in a specific way. Replacing the bytes too early, like escaping for HTML too
 * early, can introduce other forms of corruption and data loss.
 *
 * When in doubt, use this function to replace spans of invalid bytes.
 *
 * Replacement follows the “maximal subpart” algorithm for secure and interoperable
 * strings. This can lead to sequences of multiple replacement characters in a row.
 *
 * Example:
 *
 *     // Valid strings come through unchanged.
 *     'test' === wp_scrub_utf8( 'test' );
 *
 *     // Invalid sequences of bytes are replaced.
 *     $invalid = "the byte \xC0 is never allowed in a UTF-8 string.";
 *     "the byte \u{FFFD} is never allowed in a UTF-8 string." === wp_scrub_utf8( $invalid, true );
 *     'the byte � is never allowed in a UTF-8 string.' === wp_scrub_utf8( $invalid, true );
 *
 *     // Maximal subparts are replaced individually.
 *     '.�.' === wp_scrub_utf8( ".\xC0." );              // C0 is never valid.
 *     '.�.' === wp_scrub_utf8( ".\xE2\x8C." );          // Missing A3 at end.
 *     '.��.' === wp_scrub_utf8( ".\xE2\x8C\xE2\x8C." ); // Maximal subparts replaced separately.
 *     '.��.' === wp_scrub_utf8( ".\xC1\xBF." );         // Overlong sequence.
 *     '.���.' === wp_scrub_utf8( ".\xED\xA0\x80." );    // Surrogate half.
 *
 * Note! The Unicode Replacement Character is itself a Unicode character (U+FFFD).
 * Once a span of invalid bytes has been replaced by one, it will not be possible
 * to know whether the replacement character was originally intended to be there
 * or if it is the result of scrubbing bytes. It is ideal to leave replacement for
 * display only, but some contexts (e.g. generating XML or passing data into a
 * large language model) require valid input strings.
 *
 * @since 6.9.0
 *
 * @see https://www.unicode.org/versions/Unicode16.0.0/core-spec/chapter-5/#G40630
 *
 * @param string $text String which is assumed to be UTF-8 but may contain invalid sequences of bytes.
 * @return string Input text with invalid sequences of bytes replaced with the Unicode replacement character.
 */
    public function wpScrubUtf8(string $text): string;
}
