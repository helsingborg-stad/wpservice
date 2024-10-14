<?php

namespace WpService\Contracts;

interface ResetMbstringEncoding
{
/**
 * Resets the mbstring internal encoding to a users previously set encoding.
 *
 * @see mbstring_binary_safe_encoding()
 *
 * @since 3.7.0
 */
    public function resetMbstringEncoding(): void;
}
