<?php

namespace WpService\Contracts;

interface NoteSidebarBeingRendered
{
/**
 * Make a note of the sidebar being rendered before WordPress starts rendering
 * it. This lets us get to the current sidebar in
 * render_block_core_widget_group().
 *
 * @since 5.9.0
 *
 * @global int|string $_sidebar_being_rendered
 *
 * @param int|string $index       Index, name, or ID of the dynamic sidebar.
 */
    public function noteSidebarBeingRendered(int|string $index): void;
}
