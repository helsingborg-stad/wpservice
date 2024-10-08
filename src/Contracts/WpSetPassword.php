<?php

namespace WpService\Contracts;

interface WpSetPassword
{
    /**
     * Updates the user's password with a new encrypted one.
     *
     * For integration with other applications, this function can be overwritten to
     * instead use the other package password checking algorithm.
     *
     * Please note: This function should be used sparingly and is really only meant for single-time
     * application. Leveraging this improperly in a plugin or theme could result in an endless loop
     * of password resets if precautions are not taken to ensure it does not execute on every page load.
     *
     * @since 2.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $password The plaintext new user password.
     * @param int $userId  User ID.
     */
    public function wpSetPassword(string $password, int $userId): void;
}
