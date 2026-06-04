<?php

namespace WpService\Contracts;

interface WpFastHash
{
/**
 * Returns a cryptographically secure hash of a message using a fast generic hash function.
 *
 * Use the wp_verify_fast_hash() function to verify the hash.
 *
 * This function does not salt the value prior to being hashed, therefore input to this function must originate from
 * a random generator with sufficiently high entropy, preferably greater than 128 bits. This function is used internally
 * in WordPress to hash security keys and application passwords which are generated with high entropy.
 *
 * Important:
 *
 *  - This function must not be used for hashing user-generated passwords. Use wp_hash_password() for that.
 *  - This function must not be used for hashing other low-entropy input. Use wp_hash() for that.
 *
 * The BLAKE2b algorithm is used by Sodium to hash the message.
 *
 * @since 6.8.0
 *
 * @throws TypeError Thrown by Sodium if the message is not a string.
 *
 * @param string $message The message to hash.
 * @return string The hash of the message.
 */
    public function wpFastHash(string $message): string;
}
