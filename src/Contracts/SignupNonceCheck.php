<?php

namespace WpService\Contracts;

interface SignupNonceCheck
{
    /**
 * Processes the signup nonce created in signup_nonce_fields().
 *
 * @since MU (3.0.0)
 *
 * @param array $result
 * @return array
 */
    public function signupNonceCheck(array $result): array;
}
