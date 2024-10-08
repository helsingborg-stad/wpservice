<?php

namespace WpService\Contracts;

interface WpDestroyCurrentSession
{
    /**
 * Removes the current session token from the database.
 *
 * @since 4.0.0
 */
    public function wpDestroyCurrentSession(): void;
}
