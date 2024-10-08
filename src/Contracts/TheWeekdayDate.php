<?php

namespace WpService\Contracts;

interface TheWeekdayDate
{
    /**
 * Displays the weekday on which the post was written.
 *
 * Will only output the weekday if the current post's weekday is different from
 * the previous one output.
 *
 * @since 0.71
 *
 * @global WP_Locale $wp_locale       WordPress date and time locale object.
 * @global string    $currentday      The day of the current post in the loop.
 * @global string    $previousweekday The day of the previous post in the loop.
 *
 * @param string $before Optional. Output before the date. Default empty.
 * @param string $after  Optional. Output after the date. Default empty.
 */
    public function theWeekdayDate(string $before = '', string $after = ''): void;
}
