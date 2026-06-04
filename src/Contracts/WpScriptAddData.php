<?php

namespace WpService\Contracts;

interface WpScriptAddData
{
/**
 * Adds metadata to a script.
 *
 * Works only if the script has already been registered.
 *
 * Possible values for $key and $value:
 * 'strategy' string 'defer' or 'async'.
 *
 * @since 4.2.0
 * @since 6.9.0 Updated possible values to remove reference to 'conditional' and add 'strategy'.
 *
 * @see WP_Dependencies::add_data()
 *
 * @param string $handle Name of the script.
 * @param string $key    Name of data point for which we're storing a value.
 * @param mixed $value  String containing the data to be added.
 * @return bool True on success, false on failure.
 */
    public function wpScriptAddData(string $handle, string $key, mixed $value): bool;
}
