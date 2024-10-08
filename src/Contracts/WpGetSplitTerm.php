<?php

namespace WpService\Contracts;

interface WpGetSplitTerm
{
    /**
     * Gets the new term ID corresponding to a previously split term.
     *
     * @since 4.2.0
     *
     * @param int $oldTermId Term ID. This is the old, pre-split term ID.
     * @param string $taxonomy    Taxonomy that the term belongs to.
     * @return int|false If a previously split term is found corresponding to the old term_id and taxonomy,
     *                   the new term_id will be returned. If no previously split term is found matching
     *                   the parameters, returns false.
     */
    public function wpGetSplitTerm(int $oldTermId, string $taxonomy): int|false;
}
