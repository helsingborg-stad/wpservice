<?php

namespace WpService\Contracts;

interface WpIsValidUtf8
{
/**
 * Determines if a given byte string represents a valid UTF-8 encoding.
 *
 * Note that it’s unlikely for non-UTF-8 data to validate as UTF-8, but
 * it is still possible. Many texts are simultaneously valid UTF-8,
 * valid US-ASCII, and valid ISO-8859-1 (`latin1`).
 *
 * Example:
 *
 *     true === wp_is_valid_utf8( '' );
 *     true === wp_is_valid_utf8( 'just a test' );
 *     true === wp_is_valid_utf8( "\xE2\x9C\x8F" );    // Pencil, U+270F.
 *     true === wp_is_valid_utf8( "\u{270F}" );        // Pencil, U+270F.
 *     true === wp_is_valid_utf8( '✏' );              // Pencil, U+270F.
 *
 *     false === wp_is_valid_utf8( "just \xC0 test" ); // Invalid bytes.
 *     false === wp_is_valid_utf8( "\xE2\x9C" );       // Invalid/incomplete sequences.
 *     false === wp_is_valid_utf8( "\xC1\xBF" );       // Overlong sequences.
 *     false === wp_is_valid_utf8( "\xED\xB0\x80" );   // Surrogate halves.
 *     false === wp_is_valid_utf8( "B\xFCch" );        // ISO-8859-1 high-bytes.
 *                                                     // E.g. The “ü” in ISO-8859-1 is a single byte 0xFC,
 *                                                     // but in UTF-8 is the two-byte sequence 0xC3 0xBC.
 *
 *  A “valid” string consists of “well-formed UTF-8 code unit sequence[s],” meaning
 *  that the bytes conform to the UTF-8 encoding scheme, all characters use the minimal
 *  byte sequence required by UTF-8, and that no sequence encodes a UTF-16 surrogate
 *  code point or any character above the representable range.
 *
 * @see https://www.unicode.org/versions/Unicode16.0.0/core-spec/chapter-3/#G32860
 *
 * @since 6.9.0
 *
 * @param string $bytes String which might contain text encoded as UTF-8.
 * @return bool Whether the provided bytes can decode as valid UTF-8.
 */
    public function wpIsValidUtf8(string $bytes): bool;
}
