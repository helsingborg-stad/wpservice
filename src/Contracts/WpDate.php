<?php

namespace WpService\Contracts;

interface WpDate
{
    /**
     * Retrieves the date, in localized format.
     *
     * This is a newer function, intended to replace `date_i18n()` without legacy quirks in it.
     *
     * Note that, unlike `date_i18n()`, this function accepts a true Unix timestamp, not summed
     * with timezone offset.
     *
     * @since 5.3.0
     *
     * @global WP_Locale $wp_locale WordPress date and time locale object.
     *
     * @param string $format    PHP date format.
     * @param int $timestamp Optional. Unix timestamp. Defaults to current time.
     * @param \DateTimeZone $timezone  Optional. Timezone to output result in. Defaults to timezone
     *                                from site settings.
     * @return string|false The date, translated if locale specifies it. False on invalid timestamp input.
     */
    public function wpDate(string $format, int $timestamp = null, \DateTimeZone $timezone = null): string|false;
}
