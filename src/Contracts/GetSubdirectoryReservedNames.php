<?php

namespace WpService\Contracts;

interface GetSubdirectoryReservedNames
{
    /**
 * Retrieves a list of reserved site on a sub-directory Multisite installation.
 *
 * @since 4.4.0
 *
 * @return string[] Array of reserved names.
 */
    public function getSubdirectoryReservedNames(): array;
}
