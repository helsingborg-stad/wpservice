<?php

namespace WpService\Contracts;

interface IsUtf8Charset
{
    /**
 * Indicates if a given slug for a character set represents the UTF-8
 * text encoding. If not provided, examines the current blog's charset.
 *
 * A charset is considered to represent UTF-8 if it is a case-insensitive
 * match of "UTF-8" with or without the hyphen.
 *
 * Example:
 *
 *     true  === is_utf8_charset( 'UTF-8' );
 *     true  === is_utf8_charset( 'utf8' );
 *     false === is_utf8_charset( 'latin1' );
 *     false === is_utf8_charset( 'UTF 8' );
 *
 *     // Only strings match.
 *     false === is_utf8_charset( [ 'charset' => 'utf-8' ] );
 *
 *     // Without a given charset, it depends on the site option "blog_charset".
 *     $is_utf8 = is_utf8_charset();
 *
 * @since 6.6.0
 * @since 6.6.1 A wrapper for _is_utf8_charset
 *
 * @see _is_utf8_charset
 *
 * @param string|null $blogCharset Optional. Slug representing a text character encoding, or "charset".
 *                                  E.g. "UTF-8", "Windows-1252", "ISO-8859-1", "SJIS".
 *                                  Default value is to infer from "blog_charset" option.
 * @return bool Whether the slug represents the UTF-8 encoding.
 */
    public function isUtf8Charset(string|null $blogCharset): bool;
}
