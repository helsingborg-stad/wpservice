<?php

namespace WpService\Contracts;

interface TheWeekday
{
    /**
 * Displays the weekday on which the post was written.
 *
 * @since 0.71
 *
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 */
    public function theWeekday(): void;
}
