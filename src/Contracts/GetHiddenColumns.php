<?php

namespace WpService\Contracts;

interface GetHiddenColumns
{
/**
 * Get a list of hidden columns.
 *
 * @since 2.7.0
 *
 * @param string|\WP_Screen $screen The screen you want the hidden columns for
 * @return string[] Array of IDs of hidden columns.
 */
    public function getHiddenColumns(string|\WP_Screen $screen): array;
}
