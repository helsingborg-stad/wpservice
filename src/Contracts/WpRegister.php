<?php

namespace WpService\Contracts;

interface WpRegister
{
    /**
 * Displays the Registration or Admin link.
 *
 * Display a link which allows the user to navigate to the registration page if
 * not logged in and registration is enabled or to the dashboard if logged in.
 *
 * @since 1.5.0
 *
 * @param string $before  Text to output before the link. Default `<li>`.
 * @param string $after   Text to output after the link. Default `</li>`.
 * @param bool $display Default to echo and not return the link.
 * @return void|string Void if `$display` argument is true, registration or admin link
 *                     if `$display` is false.
 */
    public function wpRegister(string $before, string $after, bool $display): string;
}
