<?php

namespace WpService\Contracts;

interface ConfirmUserSignup
{
    /**
     * Shows a message confirming that the new user has been registered and is awaiting activation.
     *
     * @since MU (3.0.0)
     *
     * @param string $userName  The username.
     * @param string $userEmail The user's email address.
     */
    public function confirmUserSignup(string $userName, string $userEmail): void;
}
