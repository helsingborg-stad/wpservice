<?php

namespace WpService\Contracts;

interface WpNonceAys
{
    /**
 * Displays "Are You Sure" message to confirm the action being taken.
 *
 * If the action has the nonce explain message, then it will be displayed
 * along with the "Are you sure?" message.
 *
 * @since 2.0.4
 *
 * @param string $action The nonce action.
 */
    public function wpNonceAys(string $action): void;
}
