<?php

namespace WpService\Contracts;

interface TermIsAncestorOf
{
    /**
     * Checks if a term is an ancestor of another term.
     *
     * You can use either an ID or the term object for both parameters.
     *
     * @since 3.4.0
     *
     * @param int|object $term1    ID or object to check if this is the parent term.
     * @param int|object $term2    The child term.
     * @param string $taxonomy Taxonomy name that $term1 and `$term2` belong to.
     * @return bool Whether `$term2` is a child of `$term1`.
     */
    public function termIsAncestorOf(mixed $term1, mixed $term2, string $taxonomy): bool;
}
