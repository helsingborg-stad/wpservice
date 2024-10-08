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
     *
     * @see wp_set_option_autoload_values()
     *
     * @param string[] $options  List of option names. Expected to not be SQL-escaped.
     * @param string|bool $autoload Autoload value to control whether to load the options when WordPress starts up.
     *                              Accepts 'yes'|true to enable or 'no'|false to disable.
     * @return array Associative array of all provided $options as keys and boolean values for whether their autoload value
     *               was updated.
     */
    public function wpSetOptionsAutoload(array $options, string|bool $autoload): array;
}
