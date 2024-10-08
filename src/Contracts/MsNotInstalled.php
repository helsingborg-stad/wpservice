<?php

namespace WpService\Contracts;

interface MsNotInstalled
{
    /**
 * Displays a failure message.
 *
 * Used when a blog's tables do not exist. Checks for a missing $wpdb->site table as well.
 *
 * @access private
 * @since 3.0.0
 * @since 4.4.0 The `$domain` and `$path` parameters were added.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $domain The requested domain for the error to reference.
 * @param string $path   The requested path for the error to reference.
 */
    public function msNotInstalled(string $domain, string $path): void;
}
