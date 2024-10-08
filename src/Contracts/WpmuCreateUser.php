<?php

namespace WpService\Contracts;

interface WpmuCreateUser
{
    /**
     * Creates a user.
     *
     * This function runs when a user self-registers as well as when
     * a Super Admin creates a new user. Hook to {@see 'wpmu_new_user'} for events
     * that should affect all new users, but only on Multisite (otherwise
     * use {@see 'user_register'}).
     *
     * @since MU (3.0.0)
     *
     * @param string $userName The new user's login name.
     * @param string $password  The new user's password.
     * @param string $email     The new user's email address.
     * @return int|false Returns false on failure, or int $user_id on success.
     */
    public function wpmuCreateUser(string $userName, string $password, string $email): int|false;
}
