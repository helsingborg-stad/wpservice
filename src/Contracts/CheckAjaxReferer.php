<?php

namespace WpService\Contracts;

interface CheckAjaxReferer
{
/**
 * Verifies the Ajax request to prevent processing requests external of the blog.
 *
 * @since 2.0.3
 *
 * @param int|string $action    Action nonce.
 * @param false|string $queryArg Optional. Key to check for the nonce in `$_REQUEST` (since 2.5). If false,
 *                                `$_REQUEST` values will be evaluated for '_ajax_nonce', and '_wpnonce'
 *                                (in that order). Default false.
 * @param bool $stop      Optional. Whether to stop early when the nonce cannot be verified.
 *                                Default true.
 * @return int|false 1 if the nonce is valid and generated between 0-12 hours ago,
 *                   2 if the nonce is valid and generated between 12-24 hours ago.
 *                   False if the nonce is invalid.
 */
    public function checkAjaxReferer(int|string $action, false|string $queryArg = false, bool $stop = true): int|false;
}
