<?php

namespace WpService\Contracts;

interface SetThemeMod
{
    /**
 * Updates theme modification value for the active theme.
 *
 * @since 2.1.0
 * @since 5.6.0 A return value was added.
 *
 * @param string $name  Theme modification name.
 * @param mixed $value Theme modification value.
 * @return bool True if the value was updated, false otherwise.
 */
    public function setThemeMod(string $name, mixed $value): bool;
}
