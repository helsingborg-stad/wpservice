<?php

namespace WpService\Contracts;

interface WpGetThemeDirectoryPatternSlugs
{
    /**
     * Returns the current theme's wanted patterns (slugs) to be
     * registered from Pattern Directory.
     *
     * @since 6.3.0
     *
     * @return string[]
     */
    public function wpGetThemeDirectoryPatternSlugs(): array;
}
