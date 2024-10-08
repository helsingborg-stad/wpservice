<?php

namespace WpService\Contracts;

interface WpSetOptionAutoloadValues
{
    /**
     * Sets the autoload values for multiple options in the database.
     *
     * Autoloading too many options can lead to performance problems, especially if the options are not frequently used.
     * This function allows modifying the autoload value for multiple options without changing the actual option value.
     * This is for example recommended for plugin activation and deactivation hooks, to ensure any options exclusively used
     * by the plugin which are generally autoloaded can be set to not autoload when the plugin is inactive.
     *
     * @since 6.4.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array $options Associative array of option names and their autoload values to set. The option names are
     *                       expected to not be SQL-escaped. The autoload values accept 'yes'|true to enable or 'no'|false
     *                       to disable.
     * @return array Associative array of all provided $options as keys and boolean values for whether their autoload value
     *               was updated.
     */
    public function wpSetOptionAutoloadValues(array $options): array;
}
