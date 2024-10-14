<?php

namespace WpService\Contracts;

interface AddOption
{
/**
 * Adds a new option.
 *
 * You do not need to serialize values. If the value needs to be serialized,
 * then it will be serialized before it is inserted into the database.
 * Remember, resources cannot be serialized or added as an option.
 *
 * You can create options without values and then update the values later.
 * Existing options will not be updated and checks are performed to ensure that you
 * aren't adding a protected WordPress option. Care should be taken to not name
 * options the same as the ones which are protected.
 *
 * @since 1.0.0
 * @since 6.6.0 The $autoload parameter's default value was changed to null.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $option     Name of the option to add. Expected to not be SQL-escaped.
 * @param mixed $value      Optional. Option value. Must be serializable if non-scalar.
 *                              Expected to not be SQL-escaped.
 * @param string $deprecated Optional. Description. Not used anymore.
 * @param bool|null $autoload   Optional. Whether to load the option when WordPress starts up.
 *                              Accepts a boolean, or `null` to leave the decision up to default heuristics in WordPress.
 *                              For backward compatibility 'yes' and 'no' are also accepted.
 *                              Autoloading too many options can lead to performance problems, especially if the
 *                              options are not frequently used. For options which are accessed across several places
 *                              in the frontend, it is recommended to autoload them, by using 'yes'|true.
 *                              For options which are accessed only on few specific URLs, it is recommended
 *                              to not autoload them, by using false.
 *                              Default is null, which means WordPress will determine the autoload value.
 * @return bool True if the option was added, false otherwise.
 */
    public function addOption(string $option, mixed $value = '', string $deprecated = '', bool|null $autoload = null): bool;
}
