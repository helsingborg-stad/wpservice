<?php

namespace WpService\Contracts;

interface WpAuthCheckHtml
{
/**
 * Outputs the HTML that shows the wp-login dialog when the user is no longer logged in.
 *
 * @since 3.6.0
 */
    public function wpAuthCheckHtml(): void;
}
