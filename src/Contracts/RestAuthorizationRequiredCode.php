<?php

namespace WpService\Contracts;

interface RestAuthorizationRequiredCode
{
    /**
 * Returns a contextual HTTP error code for authorization failure.
 *
 * @since 4.7.0
 *
 * @return int 401 if the user is not logged in, 403 if the user is logged in.
 */
    public function restAuthorizationRequiredCode(): int;
}
