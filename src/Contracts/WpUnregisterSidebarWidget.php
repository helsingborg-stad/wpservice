<?php

namespace WpService\Contracts;

interface WpUnregisterSidebarWidget
{
    /**
 * Remove widget from sidebar.
 *
 * @since 2.2.0
 *
 * @param int|string $id Widget ID.
 */
    public function wpUnregisterSidebarWidget(int|string $id): void;
}
