<?php

namespace WpService\Contracts;

interface CheckPasswordResetKey
{
    /**
     * Retrieves a user row based on password reset key and login.
     *
     * A key is considered 'expired' if it exactly matches the value of the
     * user_activation_key field, rather than being matched after going through the
     * hashing process. This field is now hashed; old values are no longer accepted
     * but have a different WP_Error code so good user feedback can be provided.
     *
     * @since 3.1.0
     *
     * @global PasswordHash $wp_hasher Portable PHP password hashing framework instance.
     *
     * @param string $key       Hash to validate sending user's password.
     * @param string $login     The user login.
     * @return \WP_User|\WP_Error WP_User object on success, WP_Error object for invalid or expired keys.
     */
    public function checkPasswordResetKey(string $key, string $login): \WP_User|\WP_Error;
}
