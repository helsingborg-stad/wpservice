<?php

namespace WpService\Contracts;

interface SettingsFields
{
/**
 * Outputs nonce, action, and option_page fields for a settings page.
 *
 * @since 2.7.0
 *
 * @param string $optionGroup A settings group name. This should match the group name
 *                             used in register_setting().
 */
    public function settingsFields(string $optionGroup): void;
}
