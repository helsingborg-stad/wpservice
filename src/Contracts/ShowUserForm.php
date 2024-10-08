<?php

namespace WpService\Contracts;

interface ShowUserForm
{
    /**
     * Displays the fields for the new user account registration form.
     *
     * @since MU (3.0.0)
     *
     * @param string $userName  The entered username.
     * @param string $userEmail The entered email address.
     * @param \WP_Error|string $errors     A WP_Error object containing existing errors. Defaults to empty string.
     */
    public function showUserForm(string $userName = '', string $userEmail = '', \WP_Error|string $errors = ''): void;
}
