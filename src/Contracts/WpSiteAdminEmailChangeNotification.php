<?php

namespace WpService\Contracts;

interface WpSiteAdminEmailChangeNotification
{
    /**
 * Sends an email to the old site admin email address when the site admin email address changes.
 *
 * @since 4.9.0
 *
 * @param string $oldEmail   The old site admin email address.
 * @param string $newEmail   The new site admin email address.
 * @param string $optionName The relevant database option name.
 */
    public function wpSiteAdminEmailChangeNotification(string $oldEmail, string $newEmail, string $optionName): void;
}
