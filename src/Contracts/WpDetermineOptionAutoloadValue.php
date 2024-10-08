<?php

namespace WpService\Contracts;

interface WpDetermineOptionAutoloadValue
{
    /**
 *  Determines the appropriate autoload value for an option based on input.
 *
 *  This function checks the provided autoload value and returns a standardized value
 *  ('on', 'off', 'auto-on', 'auto-off', or 'auto') based on specific conditions.
 *
 * If no explicit autoload value is provided, the function will check for certain heuristics around the given option.
 * It will return `auto-on` to indicate autoloading, `auto-off` to indicate not autoloading, or `auto` if no clear
 * decision could be made.
 *
 * @since 6.6.0
 * @access private
 *
 * @param string $option          The name of the option.
 * @param mixed $value            The value of the option to check its autoload value.
 * @param mixed $serializedValue The serialized value of the option to check its autoload value.
 * @param bool|null $autoload     The autoload value to check.
 *                                Accepts 'on'|true to enable or 'off'|false to disable, or
 *                                'auto-on', 'auto-off', or 'auto' for internal purposes.
 *                                Any other autoload value will be forced to either 'auto-on',
 *                                'auto-off', or 'auto'.
 *                                'yes' and 'no' are supported for backward compatibility.
 * @return string Returns the original $autoload value if explicit, or 'auto-on', 'auto-off',
 *                or 'auto' depending on default heuristics.
 */
    public function wpDetermineOptionAutoloadValue(string $option, mixed $value, mixed $serializedValue, bool|null $autoload): string;
}
