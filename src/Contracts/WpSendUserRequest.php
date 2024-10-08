<?php

namespace WpService\Contracts;

interface WpSendUserRequest
{
    /**
 * Send a confirmation request email to confirm an action.
 *
 * If the request is not already pending, it will be updated.
 *
 * @since 4.9.6
 *
 * @param string $requestId ID of the request created via wp_create_user_request().
 * @return true|\WP_Error True on success, `WP_Error` on failure.
 */
    public function wpSendUserRequest(string $requestId): true|\WP_Error;
}
