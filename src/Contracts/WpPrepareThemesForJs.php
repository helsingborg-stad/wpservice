<?php

namespace WpService\Contracts;

interface WpPrepareThemesForJs
{
    /**
 * Prepares themes for JavaScript.
 *
 * @since 3.8.0
 *
 * @param WP_Theme[] $themes Optional. Array of theme objects to prepare.
 *                           Defaults to all allowed themes.
 *
 * @return array An associative array of theme data, sorted by name.
 */
    public function wpPrepareThemesForJs(array $themes): array;
}