<?php

namespace WpService\Contracts;

interface LoginHeader
{
    /**
 * Outputs the login page header.
 *
 * @since 2.1.0
 *
 * @global string      $error         Login error message set by deprecated pluggable wp_login() function
 *                                    or plugins replacing it.
 * @global bool|string $interim_login Whether interim login modal is being displayed. String 'success'
 *                                    upon successful login.
 * @global string      $action        The action that brought the visitor to the login page.
 *
 * @param string|null $title    Optional. WordPress login page title to display in the `<title>` element.
 *                                Defaults to 'Log In'.
 * @param string $message  Optional. Message to display in header. Default empty.
 * @param \WP_Error|null $wpError Optional. The error to pass. Defaults to a WP_Error instance.
 */
    public function loginHeader(string|null $title, string $message, \WP_Error|null $wpError): void;
}
