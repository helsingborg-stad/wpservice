<?php

namespace WpService\Contracts;

interface WpVerifyFastHash
{
/**
 * Checks whether a plaintext message matches the hashed value. Used to verify values hashed via wp_fast_hash().
 *
 * The function uses Sodium to hash the message and compare it to the hashed value. If the hash is not a generic hash,
 * the hash is treated as a phpass portable hash in order to provide backward compatibility for passwords and security
 * keys which were hashed using phpass prior to WordPress 6.8.0.
 *
 * @since 6.8.0
 *
 * @throws TypeError Thrown by Sodium if the message is not a string.
 *
 * @param string $message The plaintext message.
 * @param string $hash    Hash of the message to check against.
 * @return bool Whether the message matches the hashed message.
 */
    public function wpVerifyFastHash(string $message, string $hash): bool;
}
