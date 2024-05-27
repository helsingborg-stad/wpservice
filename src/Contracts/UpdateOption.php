<?php

namespace WpService\Contracts;

interface UpdateOption
{
    /**
     * Updates the value of an option that was already added.
     * @see https://developer.wordpress.org/reference/functions/update_option/
     * 
     * @param string      $option   Name of the option to update. Expected to not be SQL-escaped.
     * @param mixed       $value    Option value. Must be serializable if non-scalar. Expected to not be SQL-escaped.
     * @param string|bool $autoload Optional. Whether to load the option when WordPress starts up. For existing options,
     *                           `$autoload` can only be updated using `update_option()` if `$value` is also changed.
     *                           Accepts 'yes'|true to enable or 'no'|false to disable.
     *                           Autoloading too many options can lead to performance problems, especially if the
     *                           options are not frequently used. For options which are accessed across several places
     *                           in the frontend, it is recommended to autoload them, by using 'yes'|true.
     *                           For options which are accessed only on few specific URLs, it is recommended
     *                           to not autoload them, by using 'no'|false. For non-existent options, the default value
     *                           is 'yes'. Default null.
     * @return bool True if the value was updated, false otherwise.
    */
    public function updateOption(string $option, mixed $value, string|bool $autoload = null): bool;
}
