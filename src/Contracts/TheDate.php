<?php

namespace WpService\Contracts;

interface TheDate
{
    /**
 * Displays or retrieves the date the current post was written (once per date)
 *
 * Will only output the date if the current post's date is different from the
 * previous one output.
 *
 * i.e. Only one date listing will show per day worth of posts shown in the loop, even if the
 * function is called several times for each post.
 *
 * HTML output can be filtered with 'the_date'.
 * Date string output can be filtered with 'get_the_date'.
 *
 * @since 0.71
 *
 * @global string $currentday  The day of the current post in the loop.
 * @global string $previousday The day of the previous post in the loop.
 *
 * @param string $format  Optional. PHP date format. Defaults to the 'date_format' option.
 * @param string $before  Optional. Output before the date. Default empty.
 * @param string $after   Optional. Output after the date. Default empty.
 * @param bool $display Optional. Whether to echo the date or return it. Default true.
 * @return string|void String if retrieving.
 */
    public function theDate(string $format = '', string $before = '', string $after = '', bool $display = true): string;
}
