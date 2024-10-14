<?php

namespace WpService\Contracts;

interface UpdateNetworkOptionNewAdminEmail
{
/**
 * Sends a confirmation request email when a change of network admin email address is attempted.
 *
 * The new network admin address will not become active until confirmed.
 *
 * @since 4.9.0
 *
 * @param string $oldValue The old network admin email address.
 * @param string $value     The proposed new network admin email address.
 */
    public function updateNetworkOptionNewAdminEmail(string $oldValue, string $value): void;
}
