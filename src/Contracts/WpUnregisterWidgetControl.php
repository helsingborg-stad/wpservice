<?php

namespace WpService\Contracts;

interface WpUnregisterWidgetControl
{
    /**
 * Remove control callback for widget.
 *
 * @since 2.2.0
 *
 * @param int|string $id Widget ID.
 */
    public function wpUnregisterWidgetControl(int|string $id): void;
}
