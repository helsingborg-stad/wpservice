<?php

namespace WpService\Contracts;

interface WpHash
{
    /**
     * Gets hash of given string.
     *
     * @since 2.0.3
     *
     * @param string $data   Plain text to hash.
     * @param string $scheme Authentication scheme (auth, secure_auth, logged_in, nonce).
     * @return string Hash of $data.
     */
    public function wpHash(string $data, string $scheme = 'auth'): string;
}
