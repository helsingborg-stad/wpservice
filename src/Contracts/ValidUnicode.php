<?php

namespace WpService\Contracts;

interface ValidUnicode
{
    /**
 * Determines if a Unicode codepoint is valid.
 *
 * @since 2.7.0
 *
 * @param int $i Unicode codepoint.
 * @return bool Whether or not the codepoint is a valid Unicode codepoint.
 */
    public function validUnicode(int $i): bool;
}
