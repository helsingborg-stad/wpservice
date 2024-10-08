<?php

namespace WpService\Contracts;

interface WpNavMenuUpdateMenuItems
{
    /**
 * Saves nav menu items.
 *
 * @since 3.6.0
 *
 * @param int|string $navMenuSelectedId    ID, slug, or name of the currently-selected menu.
 * @param string $navMenuSelectedTitle Title of the currently-selected menu.
 * @return string[] The menu updated messages.
 */
    public function wpNavMenuUpdateMenuItems(int|string $navMenuSelectedId, string $navMenuSelectedTitle): array;
}
