<?php

namespace WpService\Contracts;

interface DiscardSidebarBeingRendered
{
    /**
 * Clear whatever we set in note_sidebar_being_rendered() after WordPress
 * finishes rendering a sidebar.
 *
 * @since 5.9.0
 *
 * @global int|string $_sidebar_being_rendered
 */
    public function discardSidebarBeingRendered(): void;
}
