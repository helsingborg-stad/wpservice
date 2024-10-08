<?php

namespace WpService\Contracts;

interface DefaultPasswordNagHandler
{
    /**
 * @since 2.8.0
 *
 * @global int $user_ID
 *
 * @param false $errors Deprecated.
 */
    public function defaultPasswordNagHandler(false $errors): void;
}
