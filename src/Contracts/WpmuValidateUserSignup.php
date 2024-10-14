<?php

namespace WpService\Contracts;

interface WpmuValidateUserSignup
{
/**
 * Sanitizes and validates data required for a user sign-up.
 *
 * Verifies the validity and uniqueness of user names and user email addresses,
 * and checks email addresses against allowed and disallowed domains provided by
 * administrators.
 *
 * The {@see 'wpmu_validate_user_signup'} hook provides an easy way to modify the sign-up
 * process. The value $result, which is passed to the hook, contains both the user-provided
 * info and the error messages created by the function. {@see 'wpmu_validate_user_signup'}
 * allows you to process the data in any way you'd like, and unset the relevant errors if
 * necessary.
 *
 * @since MU (3.0.0)
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $userName  The login name provided by the user.
 * @param string $userEmail The email provided by the user.
 * @return array {
 *     The array of user name, email, and the error messages.
 *
 * @type string   $user_name     Sanitized and unique username.
 * @type string   $orig_username Original username.
 * @type string   $user_email    User email address.
 * @type WP_Error $errors        WP_Error object containing any errors found.
 * }
 */
    public function wpmuValidateUserSignup(string $userName, string $userEmail): array;
}
