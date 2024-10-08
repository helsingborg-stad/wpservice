<?php

namespace WpService\Contracts;

interface WpCreateUserRequest
{
    /**
     * Creates and logs a user request to perform a specific action.
     *
     * Requests are stored inside a post type named `user_request` since they can apply to both
     * users on the site, or guests without a user account.
     *
     * @since 4.9.6
     * @since 5.7.0 Added the `$status` parameter.
     *
     * @param string $emailAddress           User email address. This can be the address of a registered
     *                                        or non-registered user.
     * @param string $actionName             Name of the action that is being confirmed. Required.
     * @param array $requestData            Misc data you want to send with the verification request and pass
     *                                        to the actions once the request is confirmed.
     * @param string $status                  Optional request status (pending or confirmed). Default 'pending'.
     * @return int|\WP_Error                   Returns the request ID if successful, or a WP_Error object on failure.
     */
    public function wpCreateUserRequest(string $emailAddress = '', string $actionName = '', array $requestData = [], string $status = 'pending'): int|\WP_Error;
}
