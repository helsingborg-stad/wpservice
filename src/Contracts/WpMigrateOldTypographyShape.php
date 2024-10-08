<?php

namespace WpService\Contracts;

interface WpMigrateOldTypographyShape
{
    /**
 * Converts typography keys declared under `supports.*` to `supports.typography.*`.
 *
 * Displays a `_doing_it_wrong()` notice when a block using the older format is detected.
 *
 * @since 5.8.0
 *
 * @param array $metadata Metadata for registering a block type.
 * @return array Filtered metadata for registering a block type.
 */
    public function wpMigrateOldTypographyShape(array $metadata): array;
}
