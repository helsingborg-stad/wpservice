<?php

namespace WpService\Contracts;

interface WpValidateUserRequestKey
{
/**
 * Validates a user request by comparing the key with the request's key.
 *
 * @since 4.9.6
 *
 * @global PasswordHash $wp_hasher Portable PHP password hashing framework instance.
 *
 * @param string $requestId ID of the request being confirmed.
 * @param string $key        Provided key to validate.
 * @return true|\WP_Error True on success, WP_Error on failure.
 */
    public function wpValidateUserRequestKey(string $requestId, string $key): true|\WP_Error;
}
