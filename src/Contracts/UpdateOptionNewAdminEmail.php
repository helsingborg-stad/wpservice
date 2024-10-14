<?php

namespace WpService\Contracts;

interface UpdateOptionNewAdminEmail
{
/**
 * Sends a confirmation request email when a change of site admin email address is attempted.
 *
 * The new site admin address will not become active until confirmed.
 *
 * @since 3.0.0
 * @since 4.9.0 This function was moved from wp-admin/includes/ms.php so it's no longer Multisite specific.
 *
 * @param string $oldValue The old site admin email address.
 * @param string $value     The proposed new site admin email address.
 */
    public function updateOptionNewAdminEmail(string $oldValue, string $value): void;
}
