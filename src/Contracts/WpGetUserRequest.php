<?php

namespace WpService\Contracts;

interface WpGetUserRequest
{
    /**
 * Returns the user request object for the specified request ID.
 *
 * @since 4.9.6
 *
 * @param int $requestId The ID of the user request.
 * @return \WP_User_Request|false
 */
    public function wpGetUserRequest(int $requestId): \WP_User_Request|false;
}
