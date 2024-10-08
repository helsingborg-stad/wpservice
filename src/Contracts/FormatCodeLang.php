<?php

namespace WpService\Contracts;

interface FormatCodeLang
{
    /**
 * Returns the language for a language code.
 *
 * @since 3.0.0
 *
 * @param string $code Optional. The two-letter language code. Default empty.
 * @return string The language corresponding to $code if it exists. If it does not exist,
 *                then the first two letters of $code is returned.
 */
    public function formatCodeLang(string $code): string;
}
