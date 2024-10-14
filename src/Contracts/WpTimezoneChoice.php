<?php

namespace WpService\Contracts;

interface WpTimezoneChoice
{
/**
 * Gives a nicely-formatted list of timezone strings.
 *
 * @since 2.9.0
 * @since 4.7.0 Added the `$locale` parameter.
 *
 * @param string $selectedZone Selected timezone.
 * @param string $locale        Optional. Locale to load the timezones in. Default current site locale.
 * @return string
 */
    public function wpTimezoneChoice(string $selectedZone, string $locale = null): string;
}
