<?php

namespace WpService\Contracts;

interface IsActiveSidebar
{
    /**
     * Determines whether a sidebar contains widgets.
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 2.8.0
     *
     * @param string|int $index Sidebar name, id or number to check.
     * @return bool True if the sidebar has widgets, false otherwise.
     */
    public function isActiveSidebar(string|int $index): bool;
}
