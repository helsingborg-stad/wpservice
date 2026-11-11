<?php

namespace WpService\Contracts;

interface WpSetOptionAutoload
{
/**
 * Sets the autoload value for an option in the database.
 *
 * This is a wrapper for {@see wp_set_option_autoload_values()}, which can be used to set the autoload value for
 * multiple options at once.
 *
 * @since 6.4.0
 * @since 6.7.0 The autoload values 'yes' and 'no' are deprecated.
 *
 * @see wp_set_option_autoload_values()
 *
 * @param string $option   Name of the option. Expected to not be SQL-escaped.
 * @param bool $autoload Autoload value to control whether to load the option when WordPress starts up.
 *                         For backward compatibility 'yes' and 'no' are also accepted, though using these values is
 *                         deprecated.
 * @return bool True if the autoload value was modified, false otherwise.
 */
    public function wpSetOptionAutoload(string $option, bool $autoload): bool;
}
