<?php

namespace WpService\Contracts;

interface DeleteOption
{
/**
 * Removes an option by name. Prevents removal of protected WordPress options.
 *
 * @since 1.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $option Name of the option to delete. Expected to not be SQL-escaped.
 * @return bool True if the option was deleted, false otherwise.
 */
    public function deleteOption(string $option): bool;
}
