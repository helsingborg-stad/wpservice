<?php

namespace WpService\Contracts;

interface WpNetworkAdminEmailChangeNotification
{
    /**
     * Sends an email to the old network admin email address when the network admin email address changes.
     *
     * @since 4.9.0
     *
     * @param string $optionName The relevant database option name.
     * @param string $newEmail   The new network admin email address.
     * @param string $oldEmail   The old network admin email address.
     * @param int $networkId  ID of the network.
     */
    public function wpNetworkAdminEmailChangeNotification(string $optionName, string $newEmail, string $oldEmail, int $networkId): void;
}
