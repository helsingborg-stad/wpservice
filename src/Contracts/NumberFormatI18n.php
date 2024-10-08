<?php

namespace WpService\Contracts;

interface NumberFormatI18n
{
    /**
 * Converts float number to format based on the locale.
 *
 * @since 2.3.0
 *
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @param float $number   The number to convert based on locale.
 * @param int $decimals Optional. Precision of the number of decimal places. Default 0.
 * @return string Converted number in string format.
 */
    public function numberFormatI18n(float $number, int $decimals = 0): string;
}
