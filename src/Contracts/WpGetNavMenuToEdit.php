<?php

namespace WpService\Contracts;

interface WpGetNavMenuToEdit
{
    /**
     * Returns the menu formatted to edit.
     *
     * @since 3.0.0
     *
     * @param int $menuId Optional. The ID of the menu to format. Default 0.
     * @return string|\WP_Error The menu formatted to edit or error object on failure.
     */
    public function wpGetNavMenuToEdit(int $menuId = 0): string|\WP_Error;
}
