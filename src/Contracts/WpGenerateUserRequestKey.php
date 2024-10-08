<?php

namespace WpService\Contracts;

interface WpGenerateUserRequestKey
{
    /**
     * Returns a confirmation key for a user action and stores the hashed version for future comparison.
     *
     * @since 4.9.6
     *
     * @global PasswordHash $wp_hasher Portable PHP password hashing framework instance.
     *
     * @param int $requestId Request ID.
     * @return string Confirmation key.
     */
    public function wpGenerateUserRequestKey(int $requestId): string;
}
