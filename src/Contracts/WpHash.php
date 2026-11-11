<?php

namespace WpService\Contracts;

interface WpHash
{
/**
 * Gets the hash of the given string.
 *
 * The default algorithm is md5 but can be changed to any algorithm supported by
 * `hash_hmac()`. Use the `hash_hmac_algos()` function to check the supported
 * algorithms.
 *
 * @since 2.0.3
 * @since 6.8.0 The `$algo` parameter was added.
 *
 * @throws InvalidArgumentException if the hashing algorithm is not supported.
 *
 * @param string $data   Plain text to hash.
 * @param string $scheme Authentication scheme (auth, secure_auth, logged_in, nonce).
 * @param string $algo   Hashing algorithm to use. Default: 'md5'.
 * @return string Hash of $data.
 */
    public function wpHash(string $data, string $scheme = 'auth', string $algo = 'md5'): string;
}
