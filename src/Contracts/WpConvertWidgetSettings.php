<?php

namespace WpService\Contracts;

interface WpConvertWidgetSettings
{
    /**
 * Converts the widget settings from single to multi-widget format.
 *
 * @since 2.8.0
 *
 * @global array $_wp_sidebars_widgets
 *
 * @param string $baseName   Root ID for all widgets of this type.
 * @param string $optionName Option name for this widget type.
 * @param array $settings    The array of widget instance settings.
 * @return array The array of widget settings converted to multi-widget format.
 */
    public function wpConvertWidgetSettings(string $baseName, string $optionName, array $settings): array;
}
