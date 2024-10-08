<?php

namespace WpService\Contracts;

interface WpLazyloadTermMeta
{
    /**
     * Queue term meta for lazy-loading.
     *
     * @since 6.3.0
     *
     * @param array $termIds List of term IDs.
     */
    public function wpLazyloadTermMeta(array $termIds): void;
}
