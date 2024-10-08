<?php

namespace WpService\Contracts;

interface WpThemeHasThemeJson
{
    /**
 * Checks whether a theme or its parent has a theme.json file.
 *
 * @since 6.2.0
 *
 * @return bool Returns true if theme or its parent has a theme.json file, false otherwise.
 */
public function wpThemeHasThemeJson(): bool;
}
