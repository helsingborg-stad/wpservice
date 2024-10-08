<?php

namespace WpService\Contracts;

interface BlockCoreNavigationBuildCssFontSizes
{
    /**
 * Build an array with CSS classes and inline styles defining the font sizes
 * which will be applied to the navigation markup in the front-end.
 *
 * @since 5.9.0
 *
 * @param array $attributes Navigation block attributes.
 *
 * @return array Font size CSS classes and inline styles.
 */
public function blockCoreNavigationBuildCssFontSizes(array $attributes): array;
}
