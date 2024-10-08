<?php

namespace WpService\Contracts;

interface WpGetGlobalSettings
{
    /**
 * Gets the settings resulting of merging core, theme, and user data.
 *
 * @since 5.9.0
 *
 * @param array $path    Path to the specific setting to retrieve. Optional.
 *                       If empty, will return all settings.
 * @param array $context {
 *     Metadata to know where to retrieve the $path from. Optional.
 *
 *     @type string $block_name Which block to retrieve the settings from.
 *                              If empty, it'll return the settings for the global context.
 *     @type string $origin     Which origin to take data from.
 *                              Valid values are 'all' (core, theme, and user) or 'base' (core and theme).
 *                              If empty or unknown, 'all' is used.
 * }
 * @return mixed The settings array or individual setting value to retrieve.
 */
    public function wpGetGlobalSettings(array $path, array $context): mixed;
}
