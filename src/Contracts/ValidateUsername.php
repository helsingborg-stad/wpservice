<?php

namespace WpService\Contracts;

interface ValidateUsername
{
/**
 * Checks whether a username is valid.
 *
 * @since 2.0.1
 * @since 4.4.0 Empty sanitized usernames are now considered invalid.
 *
 * @param string $username Username.
 * @return bool Whether username given is valid.
 */
    public function validateUsername(string $username): bool;
}
