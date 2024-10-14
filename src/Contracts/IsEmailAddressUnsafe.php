<?php

namespace WpService\Contracts;

interface IsEmailAddressUnsafe
{
/**
 * Checks an email address against a list of banned domains.
 *
 * This function checks against the Banned Email Domains list
 * at wp-admin/network/settings.php. The check is only run on
 * self-registrations; user creation at wp-admin/network/users.php
 * bypasses this check.
 *
 * @since MU (3.0.0)
 *
 * @param string $userEmail The email provided by the user at registration.
 * @return bool True when the email address is banned, false otherwise.
 */
    public function isEmailAddressUnsafe(string $userEmail): bool;
}
