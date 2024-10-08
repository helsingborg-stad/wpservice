<?php

namespace WpService\Contracts;

interface WpLoginForm
{
    /**
 * Provides a simple login form for use anywhere within WordPress.
 *
 * The login form HTML is echoed by default. Pass a false value for `$echo` to return it instead.
 *
 * @since 3.0.0
 * @since 6.6.0 Added `required_username` and `required_password` arguments.
 *
 * @param array $args {
 *     Optional. Array of options to control the form output. Default empty array.
 *
 *     @type bool   $echo              Whether to display the login form or return the form HTML code.
 *                                     Default true (echo).
 *     @type string $redirect          URL to redirect to. Must be absolute, as in "https://example.com/mypage/".
 *                                     Default is to redirect back to the request URI.
 *     @type string $form_id           ID attribute value for the form. Default 'loginform'.
 *     @type string $label_username    Label for the username or email address field. Default 'Username or Email Address'.
 *     @type string $label_password    Label for the password field. Default 'Password'.
 *     @type string $label_remember    Label for the remember field. Default 'Remember Me'.
 *     @type string $label_log_in      Label for the submit button. Default 'Log In'.
 *     @type string $id_username       ID attribute value for the username field. Default 'user_login'.
 *     @type string $id_password       ID attribute value for the password field. Default 'user_pass'.
 *     @type string $id_remember       ID attribute value for the remember field. Default 'rememberme'.
 *     @type string $id_submit         ID attribute value for the submit button. Default 'wp-submit'.
 *     @type bool   $remember          Whether to display the "rememberme" checkbox in the form.
 *     @type string $value_username    Default value for the username field. Default empty.
 *     @type bool   $value_remember    Whether the "Remember Me" checkbox should be checked by default.
 *                                     Default false (unchecked).
 *     @type bool   $required_username Whether the username field has the 'required' attribute.
 *                                     Default false.
 *     @type bool   $required_password Whether the password field has the 'required' attribute.
 *                                     Default false.
 *
 * }
 * @return void|string Void if 'echo' argument is true, login form HTML if 'echo' is false.
 */
    public function wpLoginForm(array $args): string;
}
