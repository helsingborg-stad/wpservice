<?php

namespace WpService\Contracts;

interface IsAdminBarShowing
{
/**
 * Determines whether the admin bar should be showing.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 3.1.0
 *
 * @global bool   $show_admin_bar
 * @global string $pagenow        The filename of the current screen.
 *
 * @return bool Whether the admin bar should be showing.
 */
    public function isAdminBarShowing(): bool;
}
