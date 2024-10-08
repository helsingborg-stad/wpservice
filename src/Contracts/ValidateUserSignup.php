<?php

namespace WpService\Contracts;

interface ValidateUserSignup
{
    /**
     * Validates the new user sign-up.
     *
     * @since MU (3.0.0)
     *
     * @return bool True if new user sign-up was validated, false on error.
     */
    public function validateUserSignup(): bool;
}
