<?php

namespace WpService\Contracts;

interface WpGetPopularImporters
{
    /**
 * Returns a list from WordPress.org of popular importer plugins.
 *
 * @since 3.5.0
 *
 * @return array Importers with metadata for each.
 */
    public function wpGetPopularImporters(): array;
}
