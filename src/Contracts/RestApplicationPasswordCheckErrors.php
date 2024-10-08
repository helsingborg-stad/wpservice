<?php

namespace WpService\Contracts;

interface RestApplicationPasswordCheckErrors
{
    /**
 * Checks for errors when using application password-based authentication.
 *
 * @since 5.6.0
 *
 * @global WP_User|WP_Error|null $wp_rest_application_password_status
 *
 * @param \WP_Error|null|true $result Error from another authentication handler,
 *                                   null if we should handle it, or another value if not.
 * @return \WP_Error|null|true WP_Error if the application password is invalid, the $result, otherwise true.
 */
    public function restApplicationPasswordCheckErrors(\WP_Error|null|true $result): \WP_Error|null|true;
}
