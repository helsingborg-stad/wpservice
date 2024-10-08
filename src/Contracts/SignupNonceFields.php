<?php

namespace WpService\Contracts;

interface SignupNonceFields
{
    /**
     * Adds a nonce field to the signup page.
     *
     * @since MU (3.0.0)
     */
    public function signupNonceFields(): void;
}
