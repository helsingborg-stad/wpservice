<?php

namespace WpService\Contracts;

interface IsNewDay
{
    /**
     * Determines whether the publish date of the current post in the loop is different
     * from the publish date of the previous post in the loop.
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 0.71
     *
     * @global string $currentday  The day of the current post in the loop.
     * @global string $previousday The day of the previous post in the loop.
     *
     * @return int 1 when new day, 0 if not a new day.
     */
    public function isNewDay(): int;
}
