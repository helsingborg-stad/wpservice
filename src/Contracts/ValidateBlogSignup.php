<?php

namespace WpService\Contracts;

interface ValidateBlogSignup
{
/**
 * Validates new site signup.
 *
 * @since MU (3.0.0)
 *
 * @return bool True if the site sign-up was validated, false on error.
 */
    public function validateBlogSignup(): bool;
}
