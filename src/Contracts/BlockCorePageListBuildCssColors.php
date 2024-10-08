<?php

namespace WpService\Contracts;

interface BlockCorePageListBuildCssColors
{
    /**
 * Build an array with CSS classes and inline styles defining the colors
 * which will be applied to the pages markup in the front-end when it is a descendant of navigation.
 *
 * @since 5.8.0
 *
 * @param array $attributes Block attributes.
 * @param array $context    Navigation block context.
 * @return array Colors CSS classes and inline styles.
 */
public function blockCorePageListBuildCssColors(array $attributes, array $context): array;
}
