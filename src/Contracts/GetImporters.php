<?php

namespace WpService\Contracts;

interface GetImporters
{
    /**
 * Retrieves the list of importers.
 *
 * @since 2.0.0
 *
 * @global array $wp_importers
 * @return array
 */
    public function getImporters(): array;
}
