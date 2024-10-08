<?php

namespace WpService\Contracts;

interface NewUserEmailAdminNotice
{
    /**
 * Adds an admin notice alerting the user to check for confirmation request email
 * after email address change.
 *
 * @since 3.0.0
 * @since 4.9.0 This function was moved from wp-admin/includes/ms.php so it's no longer Multisite specific.
 *
 * @global string $pagenow The filename of the current screen.
 */
    public function newUserEmailAdminNotice(): void;
}
