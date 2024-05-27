<?php

namespace WpService\Contracts;

interface SetThemeMod
{
    /**
     * Updates theme modification value for the active theme.
     * @see https://developer.wordpress.org/reference/functions/set_theme_mod/
     *
     * @param string $name  Theme modification name.
     * @param mixed  $value Theme modification value.
     * @return bool True if the value was updated, false otherwise.
     */
    public function setThemeMod(string $name, mixed $value): bool;
}
