<?php

namespace WpService\Contracts;

interface BlockCoreNavigationBuildCssColors
{
/**
 * Build an array with CSS classes and inline styles defining the colors
 * which will be applied to the navigation markup in the front-end.
 *
 * @since 5.9.0
 *
 * @param array $attributes Navigation block attributes.
 *
 * @return array Colors CSS classes and inline styles.
 */
public function blockCoreNavigationBuildCssColors(array $attributes): array;
}