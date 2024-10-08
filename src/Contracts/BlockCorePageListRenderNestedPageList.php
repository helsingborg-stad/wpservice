<?php

namespace WpService\Contracts;

interface BlockCorePageListRenderNestedPageList
{
    /**
 * Outputs Page list markup from an array of pages with nested children.
 *
 * @since 5.8.0
 *
 * @param boolean $openSubmenusOnClick Whether to open submenus on click instead of hover.
 * @param boolean $showSubmenuIcons Whether to show submenu indicator icons.
 * @param boolean $isNavigationChild If block is a child of Navigation block.
 * @param array $nestedPages The array of nested pages.
 * @param boolean $isNested Whether the submenu is nested or not.
 * @param array $activePageAncestorIds An array of ancestor ids for active page.
 * @param array $colors Color information for overlay styles.
 * @param integer $depth The nesting depth.
 *
 * @return string List markup.
 */
    public function blockCorePageListRenderNestedPageList(bool $openSubmenusOnClick, bool $showSubmenuIcons, bool $isNavigationChild, array $nestedPages, bool $isNested, array $activePageAncestorIds, array $colors, int $depth): string;
}
