<?php

namespace WpService\Contracts;

interface AddMenuClasses
{
/**
 * Adds CSS classes for top-level administration menu items.
 *
 * The list of added classes includes `.menu-top-first` and `.menu-top-last`.
 *
 * @since 2.7.0
 *
 * @param array $menu The array of administration menu items.
 * @return array The array of administration menu items with the CSS classes added.
 */
    public function addMenuClasses(array $menu): array;
}
