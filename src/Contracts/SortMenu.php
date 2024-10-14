<?php

namespace WpService\Contracts;

interface SortMenu
{
/**
 * @global array $menu_order
 * @global array $default_menu_order
 *
 * @param array $a
 * @param array $b
 * @return int
 */
    public function sortMenu(array $a, array $b): int;
}
