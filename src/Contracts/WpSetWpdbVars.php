<?php

namespace WpService\Contracts;

interface WpSetWpdbVars
{
    /**
 * Sets the database table prefix and the format specifiers for database
 * table columns.
 *
 * Columns not listed here default to `%s`.
 *
 * @since 3.0.0
 * @access private
 *
 * @global wpdb   $wpdb         WordPress database abstraction object.
 * @global string $table_prefix The database table prefix.
 */
    public function wpSetWpdbVars(): void;
}
