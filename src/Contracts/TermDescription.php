<?php

namespace WpService\Contracts;

interface TermDescription
{
    /**
     * Retrieves term description.
     *
     * @since 2.8.0
     * @since 4.9.2 The `$taxonomy` parameter was deprecated.
     *
     * @param int $term       Optional. Term ID. Defaults to the current term ID.
     * @param null $deprecated Deprecated. Not used.
     * @return string Term description, if available.
     */
    public function termDescription(int $term, null $deprecated = null): string;
}
