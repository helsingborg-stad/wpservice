<?php

namespace WpService\Contracts;

interface WpMagicQuotes
{
    /**
 * Adds magic quotes to `$_GET`, `$_POST`, `$_COOKIE`, and `$_SERVER`.
 *
 * Also forces `$_REQUEST` to be `$_GET + $_POST`. If `$_SERVER`,
 * `$_COOKIE`, or `$_ENV` are needed, use those superglobals directly.
 *
 * @since 3.0.0
 * @access private
 */
    public function wpMagicQuotes(): void;
}
