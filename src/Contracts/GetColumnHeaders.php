<?php

namespace WpService\Contracts;

interface GetColumnHeaders
{
    /**
 * Get the column headers for a screen
 *
 * @since 2.7.0
 *
 * @param string|\WP_Screen $screen The screen you want the headers for
 * @return string[] The column header labels keyed by column ID.
 */
    public function getColumnHeaders(string|\WP_Screen $screen): array;
}
