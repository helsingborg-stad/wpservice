<?php

namespace WpService\Contracts;

interface WpHasNoncharacters
{
/**
 * Returns whether the given string contains Unicode noncharacters.
 *
 * XML recommends against using noncharacters and HTML forbids their
 * use in attribute names. Unicode recommends that they not be used
 * in open exchange of data.
 *
 * Noncharacters are code points within the following ranges:
 *  - U+FDD0–U+FDEF
 *  - U+FFFE–U+FFFF
 *  - U+1FFFE, U+1FFFF, U+2FFFE, U+2FFFF, …, U+10FFFE, U+10FFFF
 *
 * @see https://www.unicode.org/versions/Unicode17.0.0/core-spec/chapter-23/#G12612
 * @see https://www.w3.org/TR/xml/#charsets
 * @see https://html.spec.whatwg.org/#attributes-2
 *
 * @since 6.9.0
 *
 * @param string $text Are there noncharacters in this string?
 * @return bool Whether noncharacters were found in the string.
 */
    public function wpHasNoncharacters(string $text): bool;
}
