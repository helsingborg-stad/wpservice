<?php

namespace WpService\Contracts;

interface TheModifiedDate
{
    /**
 * Displays the date on which the post was last modified.
 *
 * @since 2.1.0
 *
 * @param string $format  Optional. PHP date format. Defaults to the 'date_format' option.
 * @param string $before  Optional. Output before the date. Default empty.
 * @param string $after   Optional. Output after the date. Default empty.
 * @param bool $display Optional. Whether to echo the date or return it. Default true.
 * @return string|void String if retrieving.
 */
    public function theModifiedDate(string $format = '', string $before = '', string $after = '', bool $display = true): string;
}
