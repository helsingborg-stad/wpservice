<?php

namespace WpService\Contracts;

interface ValidUnicode
{
/**
 * Determines if a Unicode codepoint is valid.
 *
 * The definition of a valid Unicode codepoint is taken from the XML definition:
 *
 * > Characters
 * >
 * > …
 * > Legal characters are tab, carriage return, line feed, and the legal characters of
 * > Unicode and ISO/IEC 10646.
 * > …
 * > Char ::= #x9 | #xA | #xD | [#x20-#xD7FF] | [#xE000-#xFFFD] | [#x10000-#x10FFFF]
 *
 * @since 2.7.0
 *
 * @see https://www.w3.org/TR/xml/#charsets
 *
 * @param int $i Unicode codepoint.
 * @return bool Whether or not the codepoint is a valid Unicode codepoint.
 */
    public function validUnicode(int $i): bool;
}
