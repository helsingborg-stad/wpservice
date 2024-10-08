<?php

namespace WpService\Contracts;

interface WpIsAutoUpdateForcedForItem
{
    /**
     * Checks whether auto-updates are forced for an item.
     *
     * @since 5.6.0
     *
     * @param string $type   The type of update being checked: Either 'theme' or 'plugin'.
     * @param bool|null $update Whether to update. The value of null is internally used
     *                          to detect whether nothing has hooked into this filter.
     * @param object $item   The update offer.
     * @return bool True if auto-updates are forced for `$item`, false otherwise.
     */
    public function wpIsAutoUpdateForcedForItem(string $type, bool|null $update, object $item): bool;
}
