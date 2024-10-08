<?php

namespace WpService\Contracts;

interface IsRtl
{
    /**
     * Determines whether the current locale is right-to-left (RTL).
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 3.0.0
     *
     * @global WP_Locale $wp_locale WordPress date and time locale object.
     *
     * @return bool Whether locale is RTL.
     */
    public function isRtl(): bool;
}
