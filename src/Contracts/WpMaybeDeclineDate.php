<?php

namespace WpService\Contracts;

interface WpMaybeDeclineDate
{
/**
 * Determines if the date should be declined.
 *
 * If the locale specifies that month names require a genitive case in certain
 * formats (like 'j F Y'), the month name will be replaced with a correct form.
 *
 * @since 4.4.0
 * @since 5.4.0 The `$format` parameter was added.
 *
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @param string $date   Formatted date string.
 * @param string $format Optional. Date format to check. Default empty string.
 * @return string The date, declined if locale specifies it.
 */
    public function wpMaybeDeclineDate(string $date, string $format = ''): string;
}
