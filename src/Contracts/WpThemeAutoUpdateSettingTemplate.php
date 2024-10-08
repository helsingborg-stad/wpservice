<?php

namespace WpService\Contracts;

interface WpThemeAutoUpdateSettingTemplate
{
    /**
 * Returns the JavaScript template used to display the auto-update setting for a theme.
 *
 * @since 5.5.0
 *
 * @return string The template for displaying the auto-update setting link.
 */
    public function wpThemeAutoUpdateSettingTemplate(): string;
}
