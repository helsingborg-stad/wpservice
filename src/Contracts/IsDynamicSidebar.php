<?php

namespace WpService\Contracts;

interface IsDynamicSidebar
{
    /**
 * Determines whether the dynamic sidebar is enabled and used by the theme.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.2.0
 *
 * @global array $wp_registered_widgets  The registered widgets.
 * @global array $wp_registered_sidebars The registered sidebars.
 *
 * @return bool True if using widgets, false otherwise.
 */
    public function isDynamicSidebar(): bool;
}
