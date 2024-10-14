<?php

namespace WpService\Contracts;

interface UpdateTermCache
{
/**
 * Updates terms in cache.
 *
 * @since 2.3.0
 *
 * @param WP_Term[] $terms    Array of term objects to change.
 * @param string $taxonomy Not used.
 */
    public function updateTermCache(array $terms, string $taxonomy = ''): void;
}
