<?php

namespace WpService\Contracts;

interface WpParseWidgetId
{
    /**
 * Converts a widget ID into its id_base and number components.
 *
 * @since 5.8.0
 *
 * @param string $id Widget ID.
 * @return array Array containing a widget's id_base and number components.
 */
    public function wpParseWidgetId(string $id): array;
}
