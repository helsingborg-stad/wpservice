<?php

namespace WpService\Contracts;

interface ResetPassword
{
    /**
     * Handles resetting the user's password.
     *
     * @since 2.5.0
     *
     * @param \WP_User $user     The user
     * @param string $newPass New password for the user in plaintext
     */
    public function resetPassword(\WP_User $user, string $newPass): void;
}
