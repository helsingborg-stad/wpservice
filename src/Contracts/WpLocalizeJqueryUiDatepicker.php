<?php

namespace WpService\Contracts;

interface WpLocalizeJqueryUiDatepicker
{
    /**
 * Localizes the jQuery UI datepicker.
 *
 * @since 4.6.0
 *
 * @link https://api.jqueryui.com/datepicker/#options
 *
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 */
    public function wpLocalizeJqueryUiDatepicker(): void;
}
