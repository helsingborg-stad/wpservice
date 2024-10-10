<?php

namespace WpService\Contracts;

interface BlockCoreNavigationLinkBuildCssColors
{
    /**
 * Build an array with CSS classes and inline styles defining the colors
 * which will be applied to the navigation markup in the front-end.
 *
 * @since 5.9.0
 *
 * @param array $context     Navigation block context.
 * @param array $attributes  Block attributes.
 * @param bool $isSubMenu Whether the link is part of a sub-menu.
 * @return array Colors CSS classes and inline styles.
 */
public function blockCoreNavigationLinkBuildCssColors(mixed $context, mixed $attributes, mixed $isSubMenu = false): array;
}
