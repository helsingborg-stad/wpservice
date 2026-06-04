<?php

namespace WpService\Contracts;

interface WpSetOptionsAutoload
{
/**
 * Sets the autoload value for multiple options in the database.
 *
 * This is a wrapper for {@see wp_set_option_autoload_values()}, which can be used to set different autoload values for
 * each option at once.
 *
 * @since 6.4.0
 * @since 6.7.0 The autoload values 'yes' and 'no' are deprecated.
 *
 * @see wp_set_option_autoload_values()
 *
 * @param string[] $options  List of option names. Expected to not be SQL-escaped.
 * @param bool $autoload Autoload value to control whether to load the options when WordPress starts up.
 *                           For backward compatibility 'yes' and 'no' are also accepted, though using these values is
 *                           deprecated.
 * @return array Associative array of all provided $options as keys and boolean values for whether their autoload value
 *               was updated.
 */
    public function wpSetOptionsAutoload(array $options, bool $autoload): array;
}
