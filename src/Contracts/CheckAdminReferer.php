<?php

namespace WpService\Contracts;

interface CheckAdminReferer
{
    /**
     * Ensures intent by verifying that a user was referred from another admin page with the correct security nonce.
     *
     * This function ensures the user intends to perform a given action, which helps protect against clickjacking style
     * attacks. It verifies intent, not authorization, therefore it does not verify the user's capabilities. This should
     * be performed with `current_user_can()` or similar.
     *
     * If the nonce value is invalid, the function will exit with an "Are You Sure?" style message.
     *
     * @since 1.2.0
     * @since 2.5.0 The `$query_arg` parameter was added.
     *
     * @param int|string $action    The nonce action.
     * @param string $queryArg Optional. Key to check for nonce in `$_REQUEST`. Default '_wpnonce'.
     * @return int|false 1 if the nonce is valid and generated between 0-12 hours ago,
     *                   2 if the nonce is valid and generated between 12-24 hours ago.
     *                   False if the nonce is invalid.
     */
    public function checkAdminReferer(int|string $action, string $queryArg): int|false;
}
