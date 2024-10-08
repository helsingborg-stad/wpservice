<?php

namespace WpService\Contracts;

interface BlockCoreNavigationTypographicPresetsBackcompatibility
{
    /**
 * Filter that changes the parsed attribute values of navigation blocks contain typographic presets to contain the values directly.
 *
 * @since 5.9.0
 *
 * @param array $parsedBlock The block being rendered.
 *
 * @return array The block being rendered without typographic presets.
 */
    public function blockCoreNavigationTypographicPresetsBackcompatibility(array $parsedBlock): array;
}
