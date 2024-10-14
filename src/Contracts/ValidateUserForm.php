<?php

namespace WpService\Contracts;

interface ValidateUserForm
{
/**
 * Validates user sign-up name and email.
 *
 * @since MU (3.0.0)
 *
 * @return array Contains username, email, and error messages.
 *               See wpmu_validate_user_signup() for details.
 */
    public function validateUserForm(): array;
}
