<?php

namespace WpService\Contracts;

interface WpNavMenuManageColumns
{
    /**
 * Returns the columns for the nav menus page.
 *
 * @since 3.0.0
 *
 * @return string[] Array of column titles keyed by their column name.
 */
    public function wpNavMenuManageColumns(): array;
}
