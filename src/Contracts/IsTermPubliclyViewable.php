<?php

namespace WpService\Contracts;

interface IsTermPubliclyViewable
{
    /**
     * Determines whether a term is publicly viewable.
     *
     * A term is considered publicly viewable if its taxonomy is viewable.
     *
     * @since 6.1.0
     *
     * @param int|\WP_Term $term Term ID or term object.
     * @return bool Whether the term is publicly viewable.
     */
    public function isTermPubliclyViewable(int|\WP_Term $term): bool;
}
