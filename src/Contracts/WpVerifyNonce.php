<?php

namespace WpService\Contracts;

interface WpVerifyNonce
{
    /**
     * Verifies that a correct security nonce was used with time limit.
     *
     * A nonce is valid for 24 hours (by default).
     *
     * @since 2.0.3
     *
     * @param string $nonce  Nonce value that was used for verification, usually via a form field.
     * @param string|int $action Should give context to what is taking place and be the same when nonce was created.
     * @return int|false 1 if the nonce is valid and generated between 0-12 hours ago,
     *                   2 if the nonce is valid and generated between 12-24 hours ago.
     *                   False if the nonce is invalid.
     */
    public function wpVerifyNonce(string $nonce, string|int $action): int|false;
}
