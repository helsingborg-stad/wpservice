<?php

namespace WpService\Contracts;

interface SendConfirmationOnProfileEmail
{
/**
 * Sends a confirmation request email when a change of user email address is attempted.
 *
 * @since 3.0.0
 * @since 4.9.0 This function was moved from wp-admin/includes/ms.php so it's no longer Multisite specific.
 *
 * @global WP_Error $errors WP_Error object.
 */
    public function sendConfirmationOnProfileEmail(): void;
}
