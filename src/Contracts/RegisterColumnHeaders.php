<?php

namespace WpService\Contracts;

interface RegisterColumnHeaders
{
    /**
 * Register column headers for a particular screen.
 *
 * @see get_column_headers(), print_column_headers(), get_hidden_columns()
 *
 * @since 2.7.0
 *
 * @param string $screen The handle for the screen to register column headers for. This is
 *                          usually the hook name returned by the `add_*_page()` functions.
 * @param string[] $columns An array of columns with column IDs as the keys and translated
 *                          column names as the values.
 */
    public function registerColumnHeaders(string $screen, array $columns): void;
}
