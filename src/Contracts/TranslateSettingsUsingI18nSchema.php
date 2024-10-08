<?php

namespace WpService\Contracts;

interface TranslateSettingsUsingI18nSchema
{
    /**
 * Translates the provided settings value using its i18n schema.
 *
 * @since 5.9.0
 * @access private
 *
 * @param string|string[]|array[]|object $i18nSchema I18n schema for the setting.
 * @param string|string[]|array[] $settings    Value for the settings.
 * @param string $textdomain  Textdomain to use with translations.
 *
 * @return string|string[]|array[] Translated settings.
 */
    public function translateSettingsUsingI18nSchema(string|array|object $i18nSchema, string|array $settings, string $textdomain): string|array;
}
